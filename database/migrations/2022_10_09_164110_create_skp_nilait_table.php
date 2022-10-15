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
        Schema::create('skp_nilait', function (Blueprint $table) {
            $table->id();
            $table->integer('id_nt');
            $table->integer('id_skp');
            $table->integer('id_dinilai');
            $table->integer('id_penilai');
            $table->string('periode');
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
        Schema::dropIfExists('skp_nilait');
    }
};
