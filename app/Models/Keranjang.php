<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;

    public function pembeli(){
        return $this->belongsTo('App\Models\Pembeli', 'id_pembeli', 'id');
    }
    public function penjual(){
        return $this->belongsTo('App\Models\Penjual', 'penjual_id', 'id');
    }
    public function product(){
        return $this->belongsTo('App\Models\Product', 'id_product', 'id');
    }
}

