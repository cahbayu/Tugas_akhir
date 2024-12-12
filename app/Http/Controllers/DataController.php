<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;
use App\Models\SoilMoistureData;
use App\Models\Node;
use App\Models\Sensor;
// carbon
use Carbon\Carbon;

class DataController extends Controller
{


    public function index()
    {
        $nodess = Node::all();

        // Ambil semua node beserta sensor dan data kelembaban
        $nodes = Node::with(['sensors.soilMoistureData' => function ($query) {
            $query->where('created_at', '>=', now()->subHour())  // Ambil data dalam 1 jam terakhir
                  ->orderBy('created_at', 'desc');
        }])->get();

        // Inisialisasi array untuk menyimpan rata-rata kelembaban per node
        $nodeHumidityData = [];
        $packetLossData = [];
        $totalLogs = 0; // Inisialisasi variabel totalLogs
        $totalSoilMoistureData = 0;

        foreach ($nodes as $node) {
            $nodeLogsCount = $node->logs()->where('created_at', '>=', now()->subHour())->count();  // Jumlah log dalam 1 jam
            $totalLogs += $nodeLogsCount;

            $totalSoilMoistureData = 0;
            $sensorCount = 0;

            // Hitung jumlah data soil moisture dalam 1 jam
            foreach ($node->sensors as $sensor) {
                $soilMoistureCount = $sensor->soilMoistureData()->where('created_at', '>=', now()->subHour())->count();
                $totalSoilMoistureData += $soilMoistureCount;
                $sensorCount++;
            }

            // Hitung Packet Loss
            if ($nodeLogsCount > 0) {
                $packetLoss = (($nodeLogsCount - $totalSoilMoistureData) / $nodeLogsCount) * 100;
            } else {
                $packetLoss = 0;
            }

            // Simpan hasil packet loss per node
            $packetLossData[$node->node_type] = round($packetLoss, 2) . '% (' . $nodeLogsCount . ')';
        }

        // Hitung total packet loss untuk semua node
        $totalPacketLoss = ($totalLogs > 0) ? round((($totalLogs - $totalSoilMoistureData) / $totalLogs) * 100, 2) : 0;

        return view('index', compact('nodeHumidityData', 'nodes', 'nodess', 'packetLossData', 'totalPacketLoss', 'totalLogs'));
    }

    public function getSoilMoistureData()
    {
        // Ambil data soil moisture untuk setiap node dalam 6 jam terakhir
        $nodes = Node::with(['sensors.soilMoistureData' => function ($query) {
            $query->where('created_at', '>=', Carbon::now()->subHours(6))  // Ambil data dalam 6 jam terakhir
                  ->orderBy('created_at', 'asc');
        }])->get();

        // Siapkan array untuk menyimpan data yang akan dikirimkan ke front-end
        $data = [];
        foreach ($nodes as $node) {
            $nodeData = [
                'node_type' => $node->node_type,
                'data' => []
            ];

            // Ambil waktu dan hitung jumlah data soil moisture untuk setiap sensor
            foreach ($node->sensors as $sensor) {
                $soilMoistureData = $sensor->soilMoistureData()
                    ->where('created_at', '>=', Carbon::now()->subHours(6)) // Data dalam 6 jam terakhir
                    ->get();

                $sensorData = [
                    'sensor_name' => $sensor->sensor_name,
                    'timestamps' => [],
                    'data_count' => []
                ];

                foreach ($soilMoistureData as $dataPoint) {
                    $sensorData['timestamps'][] = $dataPoint->created_at->format('H:i'); // Waktu dalam format jam:menit
                    $sensorData['data_count'][] = 1; // Setiap entri dianggap sebagai 1 data
                }

                $nodeData['data'][] = $sensorData;
            }
            $data[] = $nodeData;
        }

        return response()->json($data);
    }


    public function getNodeStatus()
    {
        $nodess = Node::all();
        return response()->json($nodess);
    }







}
