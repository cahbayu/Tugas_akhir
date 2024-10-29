<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SoilMoistureData;
use Illuminate\Http\Request;

class SoilMoistureDataController extends Controller
{
    public function index()
    {
        return SoilMoistureData::with(['sensor', 'node'])->get();  // Mengambil semua data kelembaban tanah
    }

    public function store(Request $request)
    {
        $request->validate([
            'sensor_id' => 'required|exists:sensors,sensor_id',
            'node_id' => 'required|exists:nodes,node_id',
            'moisture_value' => 'required|numeric',
        ]);

        $data = SoilMoistureData::create($request->all());

        return response()->json($data, 201);  // Mengembalikan data kelembaban yang baru dibuat
    }
}

