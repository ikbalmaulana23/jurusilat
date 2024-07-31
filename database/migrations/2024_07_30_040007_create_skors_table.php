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
        Schema::create('skor', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('peserta_id')->nullable();
            $table->foreign('peserta_id')->references('id')->on('pendaftar');
            $table->unsignedBigInteger('id_registrasi')->nullable();
            $table->foreign('id_registrasi')->references('id')->on('registrasi');
            $table->unsignedBigInteger('id_juri')->nullable();
            $table->foreign('id_juri')->references('id')->on('users');
            $table->integer('orisinil');
            $table->integer('kekayaan_teknik');
            $table->integer('kemantapan_gerak');
            $table->integer('penampilan');
            $table->integer('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skor');
    }
};
