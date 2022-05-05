<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Master extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('manager', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('nama');
        //     $table->string('username');
        //     $table->string('password');
        // });
        // Schema::create('karyawan', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('nama');
        //     $table->string('tingkat');
        //     $table->string('username');
        //     $table->string('password');
        // });
        // Schema::create('absensi', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('waktu');
        //     $table->string('dokumentasi');
        //     $table->string('id_aktifitas');
        //     $table->string('deskripsi');
        //     $table->string('id_kabupaten');
        //     $table->string('id_kecamatan');
        //     $table->string('id_desa');
        //     $table->string('username');
        // });
        // Schema::create('kabupaten', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('nama');
        // });
        // Schema::create('kecamatan', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('id_kabupaten');
        //     $table->string('nama');
        // });
        // Schema::create('desa', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('id_kecamatan');
        //     $table->string('nama');
        // });
        Schema::create('aktifitas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('manager');
        // Schema::dropIfExists('karyawan');
        // Schema::dropIfExists('absensi');
        // Schema::dropIfExists('kabupaten');
        // Schema::dropIfExists('kecamatan');
        // Schema::dropIfExists('desa');
        Schema::dropIfExists('aktifitas');
    }
}
