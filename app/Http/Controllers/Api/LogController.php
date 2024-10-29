<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index()
    {
        return Log::with('node')->get();  // Mengambil semua log
    }

    public function store(Request $request)
    {
        $request->validate([
            'node_id' => 'required|exists:nodes,node_id',
            'action' => 'required|string|max:255',
        ]);

        $log = Log::create($request->all());

        return response()->json($log, 201);  // Mengembalikan log yang baru dibuat
    }
}

