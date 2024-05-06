<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataOPDPUTR extends Model
{
    use HasFactory;

    protected $table = 'dummy_data_putr';

    protected $fillable = [
        'kode_ruas',
        'nama_ruas',
        'ukuran_panjang_ruas',
        'klasifikasi_kondisi_jalan'
    ];
}
