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
    ];

    // Jika Anda ingin mendefinisikan relasi, Anda bisa menambahkannya di sini
    public function logs()
    {
        return $this->hasMany(Log::class, 'node_id');
    }

    public function sensors()
    {
        return $this->hasMany(Sensor::class, 'node_id');
    }
}

