<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;

    public function product(){
        return $this->belongsTo('App\Models\Product', 'id_product', 'id');
    }

    public function transaksi(){
        return $this->belongsTo('App\Models\Transaksi', 'id_transaksi', 'id');
    }
}
