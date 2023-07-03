<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_toko',
        'jam_buka',
        'banner_toko',
        'informasi_toko',
        'alamat_toko',
        'keterangan',
    ];

    public function penjual(){
        return $this->hasOne('App\Models\Penjual');
    }

    public function transaksi(){
        return $this->hasMany('App\Models\Transaksi', 'id_transaksi', 'id');
    }
}
