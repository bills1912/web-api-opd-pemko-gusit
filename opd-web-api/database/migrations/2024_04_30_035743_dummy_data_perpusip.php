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
        Schema::create('dummy_data_perpusip', function (Blueprint $table) {
            $table->id();
            $table->string('nama_responden');
            $table->string('usia');
            $table->string('jenis_kelamin');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('frekuensi_membaca');
            $table->string('durasi_membaca');
            $table->string('jumlah_buku_dibaca');
            $table->string('frekuensi_akses_internet');
            $table->string('durasi_akses_internet');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
