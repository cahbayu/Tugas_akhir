<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    use HasFactory;

    protected $table = 'nodes'; // Nama tabel
    protected $primaryKey = 'node_id'; // Primary key yang digunakan

    protected $fillable = [
        'node_type',
        'last_active',
        'backup_master',
        'online',
    ];

    // Metode untuk mendapatkan node_type
    public static function getNodeType($node_id)
    {
        // Mencari node berdasarkan node_id
        $node = self::find($node_id);
        return $node ? $node->node_type : null; // Mengembalikan node_type atau null jika tidak ditemukan
    }

    // Relasi dengan Log
    public function logs()
    {
        return $this->hasMany(Log::class, 'node_id');
    }

    // Relasi dengan Sensor
    public function sensors()
    {
        return $this->hasMany(Sensor::class, 'node_id');
    }
}


