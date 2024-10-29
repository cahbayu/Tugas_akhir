<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;

    protected $table = 'sensors';
    protected $fillable = ['node_id', 'sensor_name'];

    public function node()
    {
        return $this->belongsTo(Node::class);
    }

    public function soilMoistureData()
    {
        return $this->hasMany(SoilMoistureData::class);
    }
}


