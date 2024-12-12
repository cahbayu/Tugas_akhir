<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;

    protected $table = 'sensors'; // Nama tabel
    protected $primaryKey = 'sensor_id'; // Primary key
    protected $fillable = ['node_id', 'sensor_name']; // Kolom yang dapat diisi

    // Relasi dengan nodes
    public function node()
    {
        return $this->belongsTo(Node::class);
    }

    // Relasi dengan soil_moisture_data
    public function soilMoistureData()
    {
        return $this->hasMany(SoilMoistureData::class, 'sensor_id'); // Foreign key sensor_id
    }

}
