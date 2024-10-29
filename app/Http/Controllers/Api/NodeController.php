<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Node;
use Illuminate\Http\Request;

class NodeController extends Controller
{
    public function index()
    {
        return Node::all();  // Mengambil semua node
    }

    public function store(Request $request)
    {
        $request->validate([
            'node_type' => 'required|string',
        ]);

        $node = Node::create([
            'node_type' => $request->node_type,
        ]);

        return response()->json($node, 201);  // Mengembalikan node yang baru dibuat
    }
}

