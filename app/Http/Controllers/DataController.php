<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;
use App\Models\SoilMoistureData;
use App\Models\Node;
use App\Models\Sensor;


class DataController extends Controller
{


    public function index()
    {
        // Mengambil data kelembaban per node_id, menghitung rata-rata
        $nodes = Node::with(['sensors.soilMoistureData' => function ($query) {
            $query->orderBy('created_at', 'desc')->limit(1); // Data kelembaban terbaru
        }])->get();

        // Inisialisasi array untuk menyimpan rata-rata kelembaban per node
        $nodeHumidityData = [];

        foreach ($nodes as $node) {
            $totalMoisture = 0;
            $sensorCount = 0;

            foreach ($node->sensors as $sensor) {
                if ($sensor->soilMoistureData->isNotEmpty()) {
                    $totalMoisture += $sensor->soilMoistureData->first()->moisture_value;
                    $sensorCount++;
                }
            }

            // Rata-rata kelembaban jika sensor tersedia
            $nodeHumidityData[$node->node_id] = $sensorCount ? round($totalMoisture / $sensorCount, 2) : null;
        }

        return view('index', compact('nodeHumidityData', 'nodes'));
    }




}
