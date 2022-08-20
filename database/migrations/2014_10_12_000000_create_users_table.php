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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pegawai', 50);
            $table->bigInteger('nik_pegawai')->unique();
            $table->bigInteger('nip_pegawai');
            $table->integer('id_pangkat_golongan');
            $table->integer('id_jabatan');
            $table->integer('id_unit_kerja');
            $table->string('jenis_pegawai');
            $table->integer('hak_akses');
            $table->string('status', 10)->default('pegawai');
            $table->string('name');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
