<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('logs', function (Blueprint $table) {
        $table->dropColumn(['action', 'data_byte']); // Hapus kolom lama
        
        // Tambah kolom baru
        $table->integer('payload_size')->after('node_type');
        $table->integer('expected_data')->nullable()->after('payload_size');
        $table->integer('received_data')->nullable()->after('expected_data');
    });
}

public function down()
{
    Schema::table('logs', function (Blueprint $table) {
        $table->string('action')->after('node_id');
        $table->integer('data_byte')->nullable()->after('node_type');
        
        $table->dropColumn(['payload_size', 'expected_data', 'received_data']);
    });
}
};
