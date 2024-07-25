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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('kelas');
            $table->string('gelanggang');
            $table->string('partai');
            $table->string('nm_merah');
            $table->string('kontingen_merah');
            $table->string('nm_biru');
            $table->string('kotingen_biru');
            $table->string('status');
            $table->string('pemenang');
            $table->string('babak');
            $table->string('medali');
            $table->string('aktif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};
