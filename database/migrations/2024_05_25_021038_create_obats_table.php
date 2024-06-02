<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObatsTable extends Migration
{
    public function up()
    {
        Schema::create('tb_obat', function (Blueprint $table) {
            $table->char('id_obat', 20)->primary();
            $table->string('nama_obat', 100);
            $table->string('dosis_obat', 50);
            $table->string('keterangan', 200);
            $table->integer('stok_obat');
            $table->timestamps(); // Automatically creates 'created_at' and 'updated_at'
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_obat');
    }
}

