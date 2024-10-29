<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $fillable = ['node_id', 'action'];

    public function node()
    {
        return $this->belongsTo(Node::class);
    }
}

