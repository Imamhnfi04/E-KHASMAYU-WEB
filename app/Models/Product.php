<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_penjual',
        //'id_toko',
        'name',
        'detail',
        'image',
        'harga',
        'stok',
        'berat'
];

public function penjual(){
    return $this->belongsTo('App\Models\Penjual');
}
// public function toko(){
//     return $this->belongsTo('App\Models\Toko');
// }
}
