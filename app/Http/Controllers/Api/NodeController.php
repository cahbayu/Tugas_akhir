<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Log;
use App\Models\SoilMoistureData;
use App\Models\Node;
use Illuminate\Http\Request;

class NodeController extends Controller
{
   public function saveSoilMoistureData($sensor_id, $moisture_value, $node_id)
   {
       SoilMoistureData::create([
           'sensor_id' => $sensor_id,
           'moisture_value' => $moisture_value,
           'node_id' => $node_id,
       ]);
   }

   // Fungsi untuk menyimpan log aktivitas
   public function saveLog($node_id, $action, $payload_size = null, $expected_data = 0, $received_data = 0)
   {
       $node_type = Node::getNodeType($node_id);
       // Memberi nilai default 0 untuk expected_data dan received_data
       Log::create([
           'node_id' => $node_id,
           'action' => $action,
           'node_type' => $node_type,
           'payload_size' => $payload_size,
           'expected_data' => $expected_data,
           'received_data' => $received_data
       ]);
   }

   // Terima data POST dari ESP32
   public function receiveData(Request $request) {
    $data = $request->json()->all();

    Node::query()->update([
        'backup_master' => "Tidak",
        'online' => "Tidak",
    ]);

    if (isset($data['node'])) {
        $node = $data['node'];
        $node_id = $node['node_id'];
        $is_master = $node['master'] ?? false;
        $is_backup_master = $node['backupmaster'] ?? false;
        $payload_size = $node['payload_size'] ?? 0;
        $expected_data = $node['expected_data'] ?? 0;
        $received_data = $node['received_data'] ?? 0;

        // Dapatkan daftar semua slave yang seharusnya mengirim
        $expected_slaves = [2, 3, 4]; // Daftar ID slave yang seharusnya aktif
        $received_slaves = [];

        // Update master node
        $nodeModel = Node::find($node_id);
        if ($nodeModel) {
            $nodeModel->backup_master = $is_backup_master ? "Ya" : "Tidak";
            $nodeModel->online = "Ya";
            $nodeModel->save();
        }

        // Log untuk master
        if ($is_master || $is_backup_master) {
            $action = $is_backup_master ? 
                "Backup master (Node $node_id)" :
                "Master (Node $node_id)";
            
            $this->saveLog(
                $node_id, 
                $action,
                $payload_size,
                $expected_data,
                $received_data
            );
        }

        // Proses data slave yang aktif
        if (isset($node['slaves']) && is_array($node['slaves'])) {
            foreach ($node['slaves'] as $slave) {
                $slave_node_id = $slave['node_id'] ?? null;
                if (!$slave_node_id) continue;

                $received_slaves[] = $slave_node_id;
                
                $slave_payload_size = $slave['payload_size'] ?? 0;
                $slave_expected = $slave['expected_data'] ?? 0;
                $slave_received = $slave['received_data'] ?? 0;

                $slaveNode = Node::find($slave_node_id);
                if ($slaveNode) {
                    $slaveNode->online = "Ya";
                    $slaveNode->save();
                }

                // Simpan data sensor
                if (isset($slave['sensor_data']) && is_array($slave['sensor_data'])) {
                    foreach ($slave['sensor_data'] as $sensor) {
                        if (isset($sensor['sensor_id'], $sensor['moisture_value'])) {
                            $this->saveSoilMoistureData(
                                $sensor['sensor_id'],
                                $sensor['moisture_value'],
                                $slave_node_id
                            );
                        }
                    }
                }

                // Log untuk slave aktif
                $this->saveLog(
                    $slave_node_id, 
                    "Slave (Node $slave_node_id) mengirimkan data.",
                    $slave_payload_size,
                    $slave_expected,
                    $slave_received
                );
            }

            // Log untuk slave yang tidak mengirim data
            $missing_slaves = array_diff($expected_slaves, $received_slaves);
            foreach ($missing_slaves as $missing_slave_id) {
                $this->saveLog(
                    $missing_slave_id,
                    "Slave (Node $missing_slave_id) tidak mengirim data.",
                    0,  // payload_size = 0
                    4,  // expected_data = 4 (jumlah sensor)
                    0   // received_data = 0
                );
            }
        }

        return response()->json([
            "status" => "success", 
            "message" => "Data berhasil disimpan."
        ], 200);
    }

    return response()->json([
        "status" => "error", 
        "message" => "Data tidak valid."
    ], 400);
}
}