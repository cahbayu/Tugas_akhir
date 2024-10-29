<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sensors', function (Blueprint $table) {
            $table->id('sensor_id'); // Primary key untuk tabel sensors
            $table->unsignedBigInteger('node_id');
            $table->string('sensor_name', 50); // Kolom untuk foreign key
            $table->timestamps();
        
            // Menambahkan foreign key yang mengacu pada node_id
            $table->foreign('node_id')->references('node_id')->on('nodes')->onDelete('cascade');
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensors');
    }
};
