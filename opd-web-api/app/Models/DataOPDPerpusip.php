<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataOPDPerpusip extends Model
{
    use HasFactory;

    protected $table = 'dummy_data_perpusip';

    protected $fillable = [
        'nama_responden',
        'usia',
        'jenis_kelamin',
        'pendidikan',
        'pekerjaan',
        'frekuensi_membaca',
        'durasi_membaca',
        'jumlah_buku_dibaca',
        'frekuensi_akses_internet',
        'durasi_akses_internet',
    ];
}
