<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListDataOPD extends Model
{
    use HasFactory;

    protected $table = 'list_data_opd';

    protected $fillable = [
        'slug_opd',
        'daftar_data',
        'slug_data'
    ];
}
