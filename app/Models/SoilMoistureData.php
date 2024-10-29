<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoilMoistureData extends Model
{
    use HasFactory;

    protected $table = 'soil_moisture_data'; // Nama tabel
    protected $fillable = ['sensor_id', 'moisture_value', 'node_id']; // Kolom yang dapat diisi

    // Relasi dengan sensors
    public function sensor()
    {
        return $this->belongsTo(Sensor::class);
    }

    // Relasi dengan nodes
    public function node()
    {
        return $this->belongsTo(Node::class);
    }
}
