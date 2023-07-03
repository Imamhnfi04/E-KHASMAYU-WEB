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


        $product = Product::all();
        $data['data'] = $product;
        return view('produk.produk', $data);

    }

    function show($id){
        $data = Product::findOrFail($id);
        return view('produk.detailproduk', compact('data'));
    }
}
