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
        Schema::create('data_skp', function (Blueprint $table) {
            $table->increments('id_data_skp');
            $table->bigInteger('id_dinilai');
            $table->bigInteger('nip_dinilai');
            $table->integer('id_godi');
            $table->integer('id_jadi');
            $table->integer('id_udi');
            $table->bigInteger('id_penilai');
            $table->bigInteger('nip_penilai');
            $table->integer('id_gope');
            $table->integer('id_jape');
            $table->integer('id_upe');
            $table->bigInteger('id_app');
            $table->bigInteger('nip_app');
            $table->integer('id_gpp');
            $table->integer('id_jpp');
            $table->integer('id_upp');
            $table->string('semester');
            $table->integer('tahun');
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
        Schema::dropIfExists('data_skp');
    }
};
