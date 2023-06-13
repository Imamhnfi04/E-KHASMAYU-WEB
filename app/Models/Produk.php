<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'id_toko',
        'id_kategori',
        'id_produk',
        'deskripsi_poduk',
        'harga_produk',
        'gambar_produk',
        'status',
        'stok',
        'kategori_produk',
        'created_at',
        'updated_at',   
        
    ];
}
