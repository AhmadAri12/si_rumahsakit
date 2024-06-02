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
        Schema::create('tb_layanandarurat', function (Blueprint $table) {
            $table->char('id_layanan', 20)->primary();
            $table->char('id_pasien', 20);
            $table->string('keterangan_kejadian', 255);
            $table->string('tindakan', 100);
            $table->timestamps();
            $table->foreign('id_pasien')->references('id_pasien')->on('tb_pasien');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanan_darurats');
    }
};
