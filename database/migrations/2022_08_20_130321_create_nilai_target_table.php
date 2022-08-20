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
        Schema::create('nilai_target', function (Blueprint $table) {
            $table->bigIncrements('id_nilai_target');
            $table->bigInteger('target_ak');
            $table->bigInteger('target_kuant_output');
            $table->string('target_kuant_output_desk', 20);
            $table->bigInteger('target_kualitas_mutu');
            $table->bigInteger('target_waktu');
            $table->string('target_waktu_desk', 20);
            $table->bigInteger('target_biaya');
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
        Schema::dropIfExists('nilai_target');
    }
};
