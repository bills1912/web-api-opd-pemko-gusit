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
        Schema::create('dummy_data_putr', function (Blueprint $table) {
            $table->id();
            $table->string('kode_ruas');
            $table->string('nama_ruas');
            $table->float('ukuran_panjang_ruas');
            $table->string('klasifikasi_kondisi_jalan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dummy_data_putr');
    }
};
