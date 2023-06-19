<?php

namespace App\Http\Controllers\pembeli;

use App\Models\Pembeli;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Toko;

class ProdukController extends Controller
{
    public function index(){

        $produks = Product::latest()->paginate(8);
        $toko = Toko::all();
        $this->data['data'] = $toko;
        return view('produk.produk', compact('produks'), $this->data);
    }

    function detail(){
        return view('produk.detailproduk');
    }
}
