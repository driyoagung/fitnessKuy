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
        Schema::create('kehadiran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idKelas');
            $table->unsignedBigInteger('idAnggota');
            $table->date('tanggal');
            $table->foreign('idKelas')->references('id')->on('kelas');
            $table->foreign('idAnggota')->references('id')->on('anggota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kehadiran');
    }
};
