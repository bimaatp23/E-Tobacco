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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('level');
            $table->string('jenis_kelamin');
            $table->string('tanggal_lahir');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('tanggal_masuk');
            $table->string('no_rekening');
            $table->string('jenis_karyawan_id');
            $table->string('profile_picture');
            $table->string('username');
            $table->string('password');
        });
        Schema::create('jenis_karyawan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('gaji');
        });
        Schema::create('absensi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('waktu');
            $table->string('dokumentasi');
            $table->string('id_aktifitas');
            $table->string('deskripsi');
            $table->string('id_kabupaten');
            $table->string('id_kecamatan');
            $table->string('id_desa');
            $table->string('username');
        });
        Schema::create('kabupaten', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
        });
        Schema::create('kecamatan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_kabupaten');
            $table->string('nama');
        });
        Schema::create('desa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_kecamatan');
            $table->string('nama');
        });
        Schema::create('aktifitas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
        });
        Schema::create('gaji', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('waktu');
            $table->string('username_users');
            $table->string('gaji_pokok');
            $table->string('tanggungan_kerja');
            $table->string('hari_kerja');
            $table->string('denda');
            $table->string('gaji_bersih');
            $table->string('periode');
            $table->string('bukti');
            $table->string('status');
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
        Schema::dropIfExists('jenis_karyawan');
        Schema::dropIfExists('absensi');
        Schema::dropIfExists('kabupaten');
        Schema::dropIfExists('kecamatan');
        Schema::dropIfExists('desa');
        Schema::dropIfExists('aktifitas');
        Schema::dropIfExists('gaji');
    }
}
