<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skp_pegawai', function (Blueprint $table) {
            $table->bigIncrements('id_skp');
            $table->bigInteger('id_pegawai');
            $table->bigInteger('id_kegiatan');
            $table->string('tugas_tabahan');
            $table->string('kreativitas');
            $table->float('nilai_capaian_skp');
            $table->bigInteger('id_nilai_target');
            $table->bigInteger('id_nilai_realisasi');
            $table->string('semester');
            $table->bigInteger('tahun');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skp_pegawai');
    }
};
