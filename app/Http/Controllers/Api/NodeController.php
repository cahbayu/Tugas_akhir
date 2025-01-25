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
   public function checkNodeStatus($node)
   {
       if (!$node->last_active) {
           return 'mati';
       }
   
       $timeoutThreshold = now()->subSeconds(30);
       if ($node->last_active < $timeoutThreshold) {
           return 'mati';
       }
       
       return $node->online === 'Ya' ? 'aktif' : 'packet_loss';
   }
   
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
   
           $expected_slaves = [2, 3, 4];
           $received_slaves = [];
   
           // Update master node
           $nodeModel = Node::find($node_id);
           if ($nodeModel) {
               $nodeModel->backup_master = $is_backup_master ? "Ya" : "Tidak";
               $nodeModel->online = "Ya";
               
               if ($payload_size > 0) {
                   $nodeModel->last_active = now();
               }
               
               $status = $this->checkNodeStatus($nodeModel);
               $action = $is_backup_master ? 
                   "Backup master (Node $node_id) " :
                   "Master (Node $node_id) ";
                   
               $nodeModel->save();
               
               $this->saveLog($node_id, $action, $payload_size, $expected_data, $received_data);
           }
   
           // Proses slaves
           if (isset($node['slaves']) && is_array($node['slaves'])) {
               foreach ($node['slaves'] as $slave) {
                   $slave_node_id = $slave['node_id'] ?? null;
                   if (!$slave_node_id) continue;
   
                   $received_slaves[] = $slave_node_id;
                   
                   $slaveNode = Node::find($slave_node_id);
                   if ($slaveNode) {
                       $slaveNode->online = "Ya";
                       
                       if ($slave['payload_size'] > 0) {
                           $slaveNode->last_active = now();
                       }
                       
                       $status = $this->checkNodeStatus($slaveNode);
                       $slaveNode->save();
   
                       if ($status !== 'mati') {
                           $this->saveLog(
                               $slave_node_id, 
                               "Slave (Node $slave_node_id)",
                               $slave['payload_size'] ?? 0,
                               $slave['expected_data'] ?? 0,
                               $slave['received_data'] ?? 0
                           );
                       }
                   }
               }
   
               // Log missing slaves
               $missing_slaves = array_diff($expected_slaves, $received_slaves);
               foreach ($missing_slaves as $missing_slave_id) {
                   $missingNode = Node::find($missing_slave_id);
                   if ($missingNode) {
                       $status = $this->checkNodeStatus($missingNode);
                       if ($status !== 'mati') {
                           $this->saveLog(
                               $missing_slave_id,
                               "Slave (Node $missing_slave_id) tidak mengirim data",
                               0, 4, 0
                           );
                       }
                   }
               }
           }
   
           // Log jika master utama tidak mengirim data
           $expected_master = 1;
           $master_detected = $is_master;
   
           if (!$master_detected) {
               $masterNode = Node::find($expected_master);
               if ($masterNode) {
                   $masterNode->online = "Tidak";
                   $masterNode->save();
   
                   $status = $this->checkNodeStatus($masterNode);
                   if ($status !== 'mati') {
                       $this->saveLog(
                           $expected_master,
                           "Master (Node $expected_master) tidak mengirim data",
                           0, 12, 0
                       );
                   }
               }
           }
   
           return response()->json(["status" => "success", "message" => "Data berhasil disimpan."], 200);
       }
   
       return response()->json(["status" => "error", "message" => "Data tidak valid."], 400);
   }
}
