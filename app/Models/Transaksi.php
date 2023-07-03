<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pembeli',
        'penjual_id',
        'id_toko',
        'id_keranjang',
        'alamat',
        'ongkir',
        'total_pembayaran',
        'status_pemesanan'
    ];

    public function pembeli(){
        return $this->belongsTo('App\Models\Pembeli', 'id_pembeli', 'id');
    }

    public function penjual(){
        return $this->belongsTo('App\Models\Penjual', 'penjual_id', 'id');
    }

    public function toko(){
        return $this->belongsTo('App\Models\Toko', 'id_toko', 'id');
    }

    public function product(){
        return $this->belongsTo('App\Models\Product', 'id_produk', 'id');
    }

    public function keranjang(){
        return $this->belongsTo('App\Models\Product', 'id_keranjang', 'id');
    }

    public function detail_transaksi(){
        return $this->hasMany('App\Models\DetailTransaksi', 'id_transaksi', 'id');
    }
}
