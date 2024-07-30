<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendaftar', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->unsignedBigInteger('id_registrasi');
            $table->unsignedBigInteger('id_kategori');
            $table->string('jen_kelamin');
            $table->string('tpt_lahir');
            $table->date('tgl_lahir');
            $table->string('tb');
            $table->string('bb');
            $table->string('kelas');
            $table->string('asal_sekolah');
            // $table->string('kategori_tanding');
            $table->string('golongan');
            // $table->string('kode_gr');
            // $table->string('kelas_tanding_FK');
            $table->string('kontingen');
            $table->string('foto')->nullable();
            $table->string('ktp')->nullable();
            $table->string('akta_lahir')->nullable();
            $table->string('ijazah')->nullable();
            $table->timestamps();

            $table->foreign('id_registrasi')->references('id')->on('registrasi');
            $table->foreign('id_kategori')->references('id')->on('kategori');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftar');
    }
};
