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
        Schema::create('tb_tindakan', function (Blueprint $table) {
            $table->char('id_tindakan', 20)->primary();
            $table->char('id_layanan', 20);
            $table->char('id_dokter', 20);
            $table->string('diagnosa_penyakit', 100);
            $table->char('id_obat', 20);
            $table->integer('biaya_perawatan');
            $table->string('status_perawatan', 50);
            $table->timestamps();

            $table->foreign('id_layanan')->references('id_layanan')->on('tb_layanandarurat');
            $table->foreign('id_dokter')->references('id_dokter')->on('tb_dokter');
            $table->foreign('id_obat')->references('id_obat')->on('tb_obat');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_tindakan');
    }

};
