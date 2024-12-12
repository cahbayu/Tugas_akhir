<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoilMoistureData extends Model
{
    use HasFactory;

    protected $table = 'soil_moisture_data'; // Nama tabel
    protected $primaryKey = 'data_id'; // Primary key
    protected $fillable = ['sensor_id', 'moisture_value', 'node_id']; // Kolom yang dapat diisi

    // Relasi dengan sensors
    public function sensor()
    {
        return $this->belongsTo(Sensor::class, 'sensor_id'); // Foreign key sensor_id
    }


    // Relasi dengan nodes
    public function node()
    {
        return $this->belongsTo(Node::class);
    }
}
