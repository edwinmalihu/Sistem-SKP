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
        Schema::create('perilaku_kerja', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_skp');
            $table->integer('n_op')->nullable();
            $table->string('s_op')->nullable();
            $table->integer('n_i')->nullable();
            $table->string('s_i')->nullable();
            $table->integer('n_k')->nullable();
            $table->string('s_k')->nullable();
            $table->integer('n_d')->nullable();
            $table->string('s_d')->nullable();
            $table->integer('n_ks')->nullable();
            $table->string('s_ks')->nullable();
            $table->integer('n_kp')->nullable();
            $table->string('s_kp')->nullable();
            $table->integer('n_jml')->nullable();
            $table->string('s_jml')->nullable();
            $table->string('n_rr')->nullable();
            $table->string('s_rr')->nullable();
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
        Schema::dropIfExists('perilaku_kerja');
    }
};
