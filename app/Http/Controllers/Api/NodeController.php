<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Log;
use App\Models\SoilMoistureData;
use App\Models\Node;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NodeController extends Controller
{
    private $soilMoistureDataBatch = [];
    private $logsBatch = [];
    private $nodeUpdates = [];

    public function addToSoilMoistureBatch($sensor_id, $moisture_value, $node_id)
    {
        $this->soilMoistureDataBatch[] = [
            'sensor_id' => $sensor_id,
            'moisture_value' => $moisture_value,
            'node_id' => $node_id,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }

    public function addToLogsBatch($node_id, $action, $payload_size = null, $expected_data = 0, $received_data = 0)
    {
        $node_type = Node::getNodeType($node_id);
        $this->logsBatch[] = [
            'node_id' => $node_id,
            'action' => $action,
            'node_type' => $node_type,
            'payload_size' => $payload_size,
            'expected_data' => $expected_data,
            'received_data' => $received_data,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }

    public function addToNodeUpdates($node_id, $data)
    {
        $this->nodeUpdates[$node_id] = $data;
    }

    public function saveBatchData()
    {
        try {
            DB::beginTransaction();

            // Batch insert soil moisture data
            if (!empty($this->soilMoistureDataBatch)) {
                SoilMoistureData::insert($this->soilMoistureDataBatch);
            }

            // Batch insert logs
            if (!empty($this->logsBatch)) {
                Log::insert($this->logsBatch);
            }

            // Batch update nodes
            foreach ($this->nodeUpdates as $node_id => $data) {
                Node::where('id', $node_id)->update($data);
            }

            DB::commit();
            
            // Clear the batches
            $this->soilMoistureDataBatch = [];
            $this->logsBatch = [];
            $this->nodeUpdates = [];
            
        } catch (\Exception $e) {
            DB::rollback();
            \Log::error('Error in batch save: ' . $e->getMessage());
            throw $e;
        }
    }

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
    
    public function receiveData(Request $request) 
    {
        try {
            $data = $request->json()->all();

            // Initial update for all nodes
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
                $masterNodeData = [
                    'backup_master' => $is_backup_master ? "Ya" : "Tidak",
                    'online' => "Ya",
                    'last_active' => $payload_size > 0 ? now() : DB::raw('last_active')
                ];
                $this->addToNodeUpdates($node_id, $masterNodeData);

                $action = $is_backup_master ? 
                    "Backup master Node" :
                    "Master (Node $node_id) ";
                $this->addToLogsBatch($node_id, $action, $payload_size, $expected_data, $received_data);

                // Process slaves
                if (isset($node['slaves']) && is_array($node['slaves'])) {
                    foreach ($node['slaves'] as $slave) {
                        $slave_node_id = $slave['node_id'] ?? null;
                        if (!$slave_node_id) continue;

                        $received_slaves[] = $slave_node_id;

                        // Update slave node
                        $slaveNodeData = [
                            'online' => "Ya",
                            'last_active' => $slave['payload_size'] > 0 ? now() : DB::raw('last_active')
                        ];
                        $this->addToNodeUpdates($slave_node_id, $slaveNodeData);

                        // Process sensor data
                        if (isset($slave['sensor_data']) && is_array($slave['sensor_data'])) {
                            foreach ($slave['sensor_data'] as $sensor) {
                                if (isset($sensor['sensor_id'], $sensor['moisture_value'])) {
                                    $this->addToSoilMoistureBatch(
                                        $sensor['sensor_id'],
                                        $sensor['moisture_value'],
                                        $slave_node_id
                                    );
                                }
                            }
                        }

                        $this->addToLogsBatch(
                            $slave_node_id,
                            "Slave mengirimkan data",
                            $slave['payload_size'] ?? 0,
                            $slave['expected_data'] ?? 0,
                            $slave['received_data'] ?? 0
                        );
                    }

                    // Log missing slaves
                    $missing_slaves = array_diff($expected_slaves, $received_slaves);
                    foreach ($missing_slaves as $missing_slave_id) {
                        $this->addToLogsBatch(
                            $missing_slave_id,
                            "Slave tidak mengirim data",
                            0, 4, 0
                        );
                    }
                }

                // Save all batched data
                $this->saveBatchData();

                return response()->json([
                    "status" => "success",
                    "message" => "Data berhasil disimpan."
                ], 200);
            }

            return response()->json([
                "status" => "error",
                "message" => "Data tidak valid."
            ], 400);

        } catch (\Exception $e) {
            \Log::error('Error in receiveData: ' . $e->getMessage());
            return response()->json([
                "status" => "error",
                "message" => "Terjadi kesalahan sistem."
            ], 500);
        }
    }
}