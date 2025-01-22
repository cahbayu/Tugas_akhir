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
        // Ambil semua node beserta relasinya
        $nodes = Node::with(['sensors.soilMoistureData', 'logs'])->get();

        // Inisialisasi data yang dibutuhkan
        $nodeHumidityData = [];
        $packetLossData = [];
        $sensorData = [];
        $packetData = [];
        $latestSensorData = []; // Data terbaru untuk setiap sensor
        $totalExpectedData = 0; // Total kumulatif expected data
        $totalReceivedData = 0; // Total kumulatif received data
        $totalLogs = 0; // Total log count
        $totalSoilMoistureData = 0; // Total soil moisture data count
        $totalMoistureValue = 0; // Total moisture value

        foreach ($nodes as $node) {
            // Hitung jumlah log dan payload size dalam 1 jam terakhir
            $nodeLogs = $node->logs()->where('created_at', '>=', now()->subHour())->get();
            $nodeLogsCount = $nodeLogs->count();
            $nodePayloadSize = $nodeLogs->sum('payload_size');
            $totalLogs += $nodeLogsCount;

            // Data packet untuk node ini
            $packetData[] = [
                'node_name' => $node->node_type,
                'total_payload_size' => $nodePayloadSize,
            ];

            // Hitung packet loss berdasarkan log
            $expectedData = $nodeLogs->sum('expected_data');
            $receivedData = $nodeLogs->sum('received_data');
            $totalExpectedData += $expectedData;
            $totalReceivedData += $receivedData;

            $packetLoss = $expectedData > 0
                ? (($expectedData - $receivedData) / $expectedData) * 100
                : 0;

            $packetLossData[$node->node_type] = round($packetLoss, 2) . '%';

            // Hitung rata-rata kelembaban untuk node ini
            $nodeMoistureValue = 0;
            $nodeSoilMoistureCount = 0;

            foreach ($node->sensors as $sensor) {
                $sensorMoistureData = $sensor->soilMoistureData()->where('created_at', '>=', now()->subHour())->get();

                foreach ($sensorMoistureData as $data) {
                    $nodeMoistureValue += $data->moisture_value;
                    $nodeSoilMoistureCount++;
                    $sensorData[] = [
                        'sensor_name' => $sensor->sensor_name,
                        'moisture_value' => $data->moisture_value,
                        'start_date' => $data->created_at->format('Y/m/d'),
                    ];
                }

                // Ambil data kelembaban terbaru dari setiap sensor
                $latestData = $sensor->soilMoistureData()->latest('created_at')->first();
                if ($latestData) {
                    $latestSensorData[] = [
                        'sensor_name' => $sensor->sensor_name,
                        'moisture_value' => $latestData->moisture_value,
                        'created_at' => $latestData->created_at->format('Y/m/d H:i:s'),
                    ];
                }
            }

            $totalMoistureValue += $nodeMoistureValue;
            $totalSoilMoistureData += $nodeSoilMoistureCount;

            $averageHumidity = $nodeSoilMoistureCount > 0
                ? $nodeMoistureValue / $nodeSoilMoistureCount
                : null;

            $nodeHumidityData[$node->node_type] = $averageHumidity ? round($averageHumidity, 2) : 'N/A';
        }

        // Hitung total rata-rata kelembaban
        $nodeCount = count(array_filter($nodeHumidityData, 'is_numeric'));
        $totalAverageHumidity = $nodeCount > 0
            ? round($totalMoistureValue / $totalSoilMoistureData, 2)
            : 'N/A';

        // Hitung total packet loss berdasarkan kumulasi expected dan received data
        $totalPacketLoss = $totalExpectedData > 0
            ? round((($totalExpectedData - $totalReceivedData) / $totalExpectedData) * 100, 2)
            : 0;

        $logTotal = Log::count();

        return view('index', compact(
            'nodeHumidityData',
            'nodes',
            'packetLossData',
            'totalPacketLoss',
            'totalLogs',
            'totalAverageHumidity',
            'sensorData',
            'packetData',
            'latestSensorData', // Tambahan data terbaru untuk setiap sensor
            'logTotal'
        ));
    }


    public function tables_slave1()
    {
        // Ambil Node 1 berdasarkan node_type dengan huruf kecil tanpa spasi
        $node = Node::with(['sensors.soilMoistureData', 'logs'])->where('node_type', 'slave1')->first();

        if (!$node) {
            return view('tables-slave1', [
                'averageHumidity' => 'N/A',
                'totalPayload' => 'N/A',
                'logTotal' => 0,
                'packetLoss' => 'N/A',
                'lineChartData' => [],
                'packetLossData' => [],
                'latestSensorData' => [], // Tambahkan variabel ini
            ]);
        }

        // Hitung rata-rata kelembaban
        $nodeMoistureValue = 0;
        $nodeSoilMoistureCount = 0;

        foreach ($node->sensors as $sensor) {
            $sensorMoistureData = $sensor->soilMoistureData()->where('created_at', '>=', now()->subHour())->get();
            foreach ($sensorMoistureData as $data) {
                $nodeMoistureValue += $data->moisture_value;
                $nodeSoilMoistureCount++;
            }
        }

        $averageHumidity = $nodeSoilMoistureCount > 0
            ? round($nodeMoistureValue / $nodeSoilMoistureCount, 2)
            : 'N/A';

        // Hitung total payload data
        $nodeLogs = $node->logs()->where('created_at', '>=', now()->subHour())->get();
        $totalPayload = $nodeLogs->sum('payload_size');

        // Hitung jumlah log
        $logTotal = $nodeLogs->count();

        // Hitung packet loss
        $expectedData = $nodeLogs->sum('expected_data');
        $receivedData = $nodeLogs->sum('received_data');
        $packetLoss = $expectedData > 0
            ? round((($expectedData - $receivedData) / $expectedData) * 100, 2)
            : 0;

        // Siapkan data untuk line chart
        $lineChartData = $nodeLogs->groupBy(function ($log) {
            return $log->created_at->format('H:i');
        })->map(function ($group) {
            return $group->sum('payload_size');
        })->sortKeys();

        // Siapkan data untuk packet loss
        $packetLossData = $nodeLogs->groupBy(function ($log) {
            return $log->created_at->format('H:i');
        })->map(function ($group) {
            $sent = $group->sum('expected_data');
            $lost = $group->sum('expected_data') - $group->sum('received_data');
            return [
                'sent' => $sent,
                'lost' => max($lost, 0),
            ];
        })->sortKeys();

        // Ambil data sensor terbaru
        $sensorDataByTime = [];
        foreach ($node->sensors as $sensor) {
           $allData = $sensor->soilMoistureData()->orderBy('created_at', 'desc')->get();
           foreach ($allData as $data) {
               $timestamp = $data->created_at->format('Y-m-d H:i:s');
               if (!isset($sensorDataByTime[$timestamp])) {
                   $sensorDataByTime[$timestamp] = [
                       'timestamp' => $timestamp,
                       'sensors' => []
                   ];
               }
               $sensorDataByTime[$timestamp]['sensors'][$sensor->sensor_id] = $data->moisture_value;
           }
        }
        
        return view('tables-slave1', compact(
            'averageHumidity',
            'totalPayload', 
            'logTotal',
            'packetLoss',
            'lineChartData',
            'packetLossData',
            'sensorDataByTime' // Ganti latestSensorData dengan sensorData
        ));
    }






    public function tables_slave2()
    {
        // Ambil Node 1 berdasarkan node_type dengan huruf kecil tanpa spasi
        $node = Node::with(['sensors.soilMoistureData', 'logs'])->where('node_type', 'slave2')->first();

        if (!$node) {
            return view('tables-slave2', [
                'averageHumidity' => 'N/A',
                'totalPayload' => 'N/A',
                'logTotal' => 0,
                'packetLoss' => 'N/A',
                'lineChartData' => [],
                'packetLossData' => [],
                'latestSensorData' => [], // Tambahkan variabel ini
            ]);
        }

        // Hitung rata-rata kelembaban
        $nodeMoistureValue = 0;
        $nodeSoilMoistureCount = 0;

        foreach ($node->sensors as $sensor) {
            $sensorMoistureData = $sensor->soilMoistureData()->where('created_at', '>=', now()->subHour())->get();
            foreach ($sensorMoistureData as $data) {
                $nodeMoistureValue += $data->moisture_value;
                $nodeSoilMoistureCount++;
            }
        }

        $averageHumidity = $nodeSoilMoistureCount > 0
            ? round($nodeMoistureValue / $nodeSoilMoistureCount, 2)
            : 'N/A';

        // Hitung total payload data
        $nodeLogs = $node->logs()->where('created_at', '>=', now()->subHour())->get();
        $totalPayload = $nodeLogs->sum('payload_size');

        // Hitung jumlah log
        $logTotal = $nodeLogs->count();

        // Hitung packet loss
        $expectedData = $nodeLogs->sum('expected_data');
        $receivedData = $nodeLogs->sum('received_data');
        $packetLoss = $expectedData > 0
            ? round((($expectedData - $receivedData) / $expectedData) * 100, 2)
            : 0;

        // Siapkan data untuk line chart
        $lineChartData = $nodeLogs->groupBy(function ($log) {
            return $log->created_at->format('H:i');
        })->map(function ($group) {
            return $group->sum('payload_size');
        })->sortKeys();

        // Siapkan data untuk packet loss
        $packetLossData = $nodeLogs->groupBy(function ($log) {
            return $log->created_at->format('H:i');
        })->map(function ($group) {
            $sent = $group->sum('expected_data');
            $lost = $group->sum('expected_data') - $group->sum('received_data');
            return [
                'sent' => $sent,
                'lost' => max($lost, 0),
            ];
        })->sortKeys();

        // Ambil data sensor terbaru
        $sensorDataByTime = [];
        foreach ($node->sensors as $sensor) {
           $allData = $sensor->soilMoistureData()->orderBy('created_at', 'desc')->get();
           foreach ($allData as $data) {
               $timestamp = $data->created_at->format('Y-m-d H:i:s');
               if (!isset($sensorDataByTime[$timestamp])) {
                   $sensorDataByTime[$timestamp] = [
                       'timestamp' => $timestamp,
                       'sensors' => []
                   ];
               }
               $sensorDataByTime[$timestamp]['sensors'][$sensor->sensor_id] = $data->moisture_value;
           }
        }
        
        return view('tables-slave2', compact(
            'averageHumidity',
            'totalPayload', 
            'logTotal',
            'packetLoss',
            'lineChartData',
            'packetLossData',
            'sensorDataByTime' // Ganti latestSensorData dengan sensorData
        ));
    }

    public function tables_slave3()
    {
        // Ambil Node 1 berdasarkan node_type dengan huruf kecil tanpa spasi
        $node = Node::with(['sensors.soilMoistureData', 'logs'])->where('node_type', 'slave3')->first();

        if (!$node) {
            return view('tables-slave3', [
                'averageHumidity' => 'N/A',
                'totalPayload' => 'N/A',
                'logTotal' => 0,
                'packetLoss' => 'N/A',
                'lineChartData' => [],
                'packetLossData' => [],
                'latestSensorData' => [], // Tambahkan variabel ini
            ]);
        }

        // Hitung rata-rata kelembaban
        $nodeMoistureValue = 0;
        $nodeSoilMoistureCount = 0;

        foreach ($node->sensors as $sensor) {
            $sensorMoistureData = $sensor->soilMoistureData()->where('created_at', '>=', now()->subHour())->get();
            foreach ($sensorMoistureData as $data) {
                $nodeMoistureValue += $data->moisture_value;
                $nodeSoilMoistureCount++;
            }
        }

        $averageHumidity = $nodeSoilMoistureCount > 0
            ? round($nodeMoistureValue / $nodeSoilMoistureCount, 2)
            : 'N/A';

        // Hitung total payload data
        $nodeLogs = $node->logs()->where('created_at', '>=', now()->subHour())->get();
        $totalPayload = $nodeLogs->sum('payload_size');

        // Hitung jumlah log
        $logTotal = $nodeLogs->count();

        // Hitung packet loss
        $expectedData = $nodeLogs->sum('expected_data');
        $receivedData = $nodeLogs->sum('received_data');
        $packetLoss = $expectedData > 0
            ? round((($expectedData - $receivedData) / $expectedData) * 100, 2)
            : 0;

        // Siapkan data untuk line chart
        $lineChartData = $nodeLogs->groupBy(function ($log) {
            return $log->created_at->format('H:i');
        })->map(function ($group) {
            return $group->sum('payload_size');
        })->sortKeys();

        // Siapkan data untuk packet loss
        $packetLossData = $nodeLogs->groupBy(function ($log) {
            return $log->created_at->format('H:i');
        })->map(function ($group) {
            $sent = $group->sum('expected_data');
            $lost = $group->sum('expected_data') - $group->sum('received_data');
            return [
                'sent' => $sent,
                'lost' => max($lost, 0),
            ];
        })->sortKeys();

        // Ambil data sensor terbaru
        $sensorDataByTime = [];
        foreach ($node->sensors as $sensor) {
           $allData = $sensor->soilMoistureData()->orderBy('created_at', 'desc')->get();
           foreach ($allData as $data) {
               $timestamp = $data->created_at->format('Y-m-d H:i:s');
               if (!isset($sensorDataByTime[$timestamp])) {
                   $sensorDataByTime[$timestamp] = [
                       'timestamp' => $timestamp,
                       'sensors' => []
                   ];
               }
               $sensorDataByTime[$timestamp]['sensors'][$sensor->sensor_id] = $data->moisture_value;
           }
        }
        
        return view('tables-slave3', compact(
            'averageHumidity',
            'totalPayload', 
            'logTotal',
            'packetLoss',
            'lineChartData',
            'packetLossData',
            'sensorDataByTime' // Ganti latestSensorData dengan sensorData
        ));
    }

    public function tables_data()
    {

        // Ambil semua node beserta data terkait
        $nodes = Node::with(['logs'])->get();
        $logs = Log::all();

        $nodeData = [];
        $totalPayload = 0;
        $totalLogs = 0;
        $totalPacketLoss = 0;
        $totalExpectedData = 0;
        $totalReceivedData = 0;

        foreach ($nodes as $node) {
            // Ambil data yang diperlukan per node untuk 1 jam terakhir
            $nodePayload = $node->logs()->where('created_at', '>=', now()->subHour())->sum('payload_size');
            $nodeLogCount = $node->logs()->where('created_at', '>=', now()->subHour())->count();
            $nodeExpectedData = $node->logs()->where('created_at', '>=', now()->subHour())->sum('expected_data');
            $nodeReceivedData = $node->logs()->where('created_at', '>=', now()->subHour())->sum('received_data');
            $nodePacketLoss = $nodeReceivedData > 0
                ? round((1 - ($nodeReceivedData / $nodeExpectedData)) * 100, 2)
                : 0;

            $nodeData[] = [
                'name' => $node->node_type,
                'payload_size' => $nodePayload,
                'log_count' => $nodeLogCount,
                'packet_loss' => $nodePacketLoss,
                'expected_data' => $nodeExpectedData,
                'received_data' => $nodeReceivedData,
            ];

            // Total
            $totalPayload += $nodePayload;
            $totalLogs += $nodeLogCount;
            $totalPacketLoss += $nodePacketLoss;
            $totalExpectedData += $nodeExpectedData;
            $totalReceivedData += $nodeReceivedData;
        }

        $averagePayload = count($nodeData) > 0
            ? round($totalPayload / count($nodeData), 2)
            : 0;

        return view('tables-data', compact('nodeData', 'logs', 'totalPayload', 'totalLogs', 'totalPacketLoss', 'totalExpectedData', 'totalReceivedData', 'averagePayload'));
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
