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
        Schema::create('logs', function (Blueprint $table) {
            $table->id('log_id'); // Primary Key
            $table->unsignedBigInteger('node_id'); // Kolom untuk foreign key
            $table->string('action', 255); // Deskripsi aktivitas
            $table->string('node_type', 10); // Tambahkan kolom node_type
            $table->timestamps(); // Kolom created_at dan updated_at
        
            // Tentukan foreign key yang mengacu pada node_id
            $table->foreign('node_id')->references('node_id')->on('nodes')->onDelete('cascade');
        });            
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs');
    }
};
