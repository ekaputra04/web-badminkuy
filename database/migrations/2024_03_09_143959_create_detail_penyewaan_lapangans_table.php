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
        Schema::create('detail_penyewaan_lapangan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_penyewaan');
            $table->integer('id_lapangan');
            $table->integer('rentang_waktu');
            $table->integer('waktu_mulai');
            $table->integer('waktu_selesai');
            $table->integer('total_biaya');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_penyewaan_lapangan');
    }
};
