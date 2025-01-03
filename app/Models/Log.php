<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $table = 'logs'; // Nama tabel

    protected $primaryKey = 'log_id';

    protected $fillable = [
        'node_id',
        'action',  
        'node_type',
        'payload_size',
        'expected_data',
        'received_data',
        'created_at',
        'updated_at'
    ];

    public function node()
    {
        return $this->belongsTo(Node::class, 'node_id');
    }
}

