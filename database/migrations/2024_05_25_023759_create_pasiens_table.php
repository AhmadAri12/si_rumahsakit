<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pasien', function (Blueprint $table) {
            $table->char('id_pasien', 20)->primary();
            $table->string('nama_pasien', 50);
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('alamat_pasien', 255);
            $table->char('telp_pasien', 20);
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
        Schema::dropIfExists('tb_pasien');
    }
}

