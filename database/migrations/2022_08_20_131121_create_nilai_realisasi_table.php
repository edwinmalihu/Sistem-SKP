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
        Schema::create('nilai_realisasi', function (Blueprint $table) {
            $table->bigIncrements('id_nilai_realisasi');
            $table->bigInteger('realisasi_ak');
            $table->bigInteger('realisasi_kuant_output');
            $table->string('realisasi_kuant_output_desk', 20);
            $table->bigInteger('realisasi_kualitas_mutu');
            $table->bigInteger('realisasi_waktu');
            $table->string('realisasi_waktu_desk', 20);
            $table->bigInteger('realisasi_biaya');
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
        Schema::dropIfExists('nilai_realisasi');
    }
};
