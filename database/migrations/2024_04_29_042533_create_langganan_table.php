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
        Schema::create('langganan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idAnggota');
            $table->date('tanggalMulai');
            $table->date('tanggalBerakhir');
            $table->foreign('idAnggota')->references('id')->on('anggota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('langganan');
    }
};
