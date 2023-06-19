<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_penjual',
        'nama_toko',
        'jam_buka',
        'banner_toko',
        'informasi_toko',
        'alamat_toko',
        'keterangan',
    ];
}
