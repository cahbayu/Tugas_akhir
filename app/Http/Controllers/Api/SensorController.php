<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sensor;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function index()
    {
        return Sensor::all();  // Mengambil semua sensor
    }

    public function store(Request $request)
    {
        $request->validate([
            'node_id' => 'required|exists:nodes,node_id',
            'sensor_name' => 'required|string|max:50',
        ]);

        $sensor = Sensor::create($request->all());

        return response()->json($sensor, 201);  // Mengembalikan sensor yang baru dibuat
    }
}

