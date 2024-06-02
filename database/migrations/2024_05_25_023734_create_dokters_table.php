<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbDokterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_dokter', function (Blueprint $table) {
            $table->char('id_dokter', 20)->primary();
            $table->string('nama_dokter', 50);
            $table->string('spesialis_dokter', 255);
            $table->string('jadwal_kerja', 100);
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->string('kontrak_kerja', 100);
            $table->timestamps(); // Menggunakan created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_dokter');
    }
}

