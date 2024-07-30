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
            $table->unsignedBigInteger('id_regsiter')->nullable();
            $table->foreign('id_regsiter')->references('id')->on('registrasi');
            $table->string('orisinil');
            $table->string('kekayaan_teknik');
            $table->string('kemantapan_gerak');
            $table->string('penampilan');
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
