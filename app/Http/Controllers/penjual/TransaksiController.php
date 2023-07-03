<?php

namespace App\Http\Controllers\penjual;

use App\Http\Controllers\Controller;
use App\Models\DetailTransaksi;
use App\Models\Penjual;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $penjual = Penjual::where('user_id', auth()->user()->id)->first();
        $toko = $penjual->toko_id;
        $transaksi = Transaksi::where('id_toko', $toko)->get();

        return view('penjual.transaksi.index', [
            'transaksi' => $transaksi
        ]);
    }

    public function show(Request $request, $id_transaksi)
    {
        $detail_transaksi = DetailTransaksi::where('id_transaksi', $id_transaksi)->with('product')->get();
        return view('checkout.show',compact('detail_transaksi'));
    }
}
