<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = [
            'id_penjual',
            'id_kategori',
            'nama_produk',
            'deskripsi_produk',
            'harga_produk',
            'gambar_produk',
            'status',
            'stok',
    ];
}
