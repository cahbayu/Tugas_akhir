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
        Schema::create('soil_moisture_data', function (Blueprint $table) {
            $table->id('data_id'); // Primary Key
            $table->unsignedBigInteger('sensor_id'); // Kolom untuk foreign key
            $table->decimal('moisture_value', 5, 2); // Nilai kelembaban tanah
            $table->unsignedBigInteger('node_id'); // Kolom untuk foreign key
            $table->timestamp('created_at')->useCurrent(); // Waktu data dikumpulkan
        
            // Tentukan foreign key untuk sensor_id
            $table->foreign('sensor_id')->references('sensor_id')->on('sensors')->onDelete('cascade');
            // Tentukan foreign key untuk node_id
            $table->foreign('node_id')->references('node_id')->on('nodes')->onDelete('cascade');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soil_moisture_data');
    }
};
