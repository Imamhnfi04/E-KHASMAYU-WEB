<?php

namespace App\Http\Controllers\pembeli;

use App\Http\Controllers\Controller;
use App\Models\Penjual;
use App\Models\Toko;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function index()
    {
        $penjual = Penjual::all();
        $toko = Toko::all();
        $this->data['data'] = $penjual;
        $this->data['toko'] = $toko;
        return view('toko.toko', $this->data);
    }
}
