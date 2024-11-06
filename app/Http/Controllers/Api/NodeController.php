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
    public function saveLog($node_id, $action, $data_byte = null)
    {
        $node_type = Node::getNodeType($node_id); // Ambil node_type
        Log::create([
            'node_id' => $node_id,
            'action' => $action,
            'node_type' => $node_type,
            'data_byte' => $data_byte,
        ]);
    }

    // Terima data POST dari ESP32
    public function receiveData(Request $request)
{
    $data = $request->json()->all(); // Ambil data JSON dari request

    // Debug: Tampilkan data yang diterima
    \Log::debug($data);

    // Cek apakah data valid
    if (isset($data['node']['master']) || isset($data['node']['backupmaster'])) {
        $node_id = $data['node']['node_id'];
        $data_byte = $data['node']['data_byte']; // Ambil data_byte dari node
        $is_backup_master = isset($data['node']['backupmaster']);

        // Logika pengiriman data dari master atau backup master
        if ($is_backup_master) {
            $this->saveLog($node_id, "Backup master (Node $node_id) mengambil alih pengiriman data.", $data_byte);

            foreach ($data['node']['slaves'] as $slave) {
                $slave_node_id = $slave['node_id'];
                $slave_data_byte = $slave['data_byte']; // Ambil data_byte dari slave

                foreach ($slave['sensor_data'] as $sensor) {
                    $this->saveSoilMoistureData($sensor['sensor_id'], $sensor['moisture_value'], $slave_node_id);
                }
                $this->saveLog($slave_node_id, "Slave (Node $slave_node_id) mengirimkan data kelembaban.", $slave_data_byte);
            }
        } else {
            $this->saveLog($node_id, "Master (Node $node_id) mengirimkan data dari semua slave.", $data_byte);

            foreach ($data['node']['slaves'] as $slave) {
                $slave_node_id = $slave['node_id'];
                $slave_data_byte = $slave['data_byte']; // Ambil data_byte dari slave

                foreach ($slave['sensor_data'] as $sensor) {
                    $this->saveSoilMoistureData($sensor['sensor_id'], $sensor['moisture_value'], $slave_node_id);
                }
                $this->saveLog($slave_node_id, "Slave (Node $slave_node_id) mengirimkan data kelembaban.", $slave_data_byte);
            }
        }
    } else {
        return response()->json(["status" => "error", "message" => "Data tidak valid."], 400);
    }

    // Kirim respons sukses
    return response()->json(["status" => "success", "message" => "Data berhasil disimpan."], 200);
}
}


