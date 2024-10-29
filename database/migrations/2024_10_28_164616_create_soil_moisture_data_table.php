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
            $table->id('data_id');
            $table->unsignedBigInteger('sensor_id');
            $table->unsignedBigInteger('node_id');
            $table->decimal('moisture_value', 5, 2);
            $table->timestamp('created_at')->useCurrent();
    
            $table->foreign('sensor_id')->references('sensor_id')->on('sensors')->onDelete('cascade');
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
