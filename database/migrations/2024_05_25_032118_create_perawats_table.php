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
    Schema::create('tb_perawat', function (Blueprint $table) {
        $table->char('id_perawat', 20)->primary();
        $table->string('nama_perawat', 50);
        $table->string('spesialis_perawat', 255);
        $table->string('jadwal_kerja', 100);
        $table->time('jam_mulai');
        $table->time('jam_selesai');
        $table->string('kontrak_kerja', 100);
        $table->timestamps(0);
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perawats');
    }
};
