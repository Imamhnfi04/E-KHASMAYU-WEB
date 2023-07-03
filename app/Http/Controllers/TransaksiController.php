<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksi;
use App\Models\Keranjang;
use App\Models\Pembeli;
use App\Models\Product;
use App\Models\Transaksi;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TransaksiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $transaksi = Transaksi::where('id_pembeli', auth()->user()->pembeli->id)->get();
        $pembeli = Pembeli::where('user_id', auth()->user()->id)->first();
        $daftar_keranjang = Keranjang::where('id_pembeli', $pembeli->id)->with('product')->get();
        $subtotal = 0;
        foreach ($daftar_keranjang as $item) {
            $subtotal += $item->total_harga;
        }

        $total = $subtotal + 15000;

        $detail_transaksi = [];
        foreach ($transaksi as $transaksiItem) {
            $detailTransaksi = DetailTransaksi::where('id_transaksi', $transaksiItem->id)->get();
            $detail_transaksi[$transaksiItem->id] = $detailTransaksi;
        }

        return view('checkout.resi', [
            'total' => $total,
            'subtotal' => $subtotal,
            'transaksi' => $transaksi,
            'detail_transaksi' => $detail_transaksi
        ]);
    }

    public function store()
    {
        $pembeli = Pembeli::where('user_id', auth()->user()->id)->first();
        $daftar_keranjang = Keranjang::where('id_pembeli', $pembeli->id)->get();
        $daftar_keranjang_toko = [];

        //membagi keranjang berdasarkan id toko
        foreach ($daftar_keranjang as $keranjang) {
            $daftar_keranjang_toko[$keranjang->product->toko_id][] = $keranjang;
        }

        //barang yang ada ditoko yang sama dibagi lagi, kemudian maasukkan kedalam tabel transaksi
        foreach ($daftar_keranjang_toko as $id_toko => $daftar_barang) {

            $transaksi = Transaksi::create([
                'id_pembeli' => $pembeli->id,
                'id_toko' => $id_toko,
                'alamat' => $pembeli->alamat,
                'status_pembayaran' => 'Diproses',
                'kode_transaksi' => Str::random(6),
            ]);

            //daftar barang tadi dibagi kedalam barang satuan, dimasukkan kedalam tabel detail, transaksi
            foreach ($daftar_barang as $barang) {
                $detail_transaksi = new DetailTransaksi;
                $detail_transaksi->id_transaksi = $transaksi->id;
                $detail_transaksi->id_product = $barang->id_product;
                $detail_transaksi->jumlah_product = $barang->jumlah;
                $detail_transaksi->save();
            }
        }

        //barang-barang yang ada didalam keranjang tadi dihapus satuan, samapai keranjang kosong
        foreach ($daftar_keranjang as $keranjang){
            $keranjang->delete();
        }


        return redirect()->route('pembeli.resi');

        // $subtotal = 0;
        // foreach ($daftar_keranjang as $item) {
        //     $subtotal += $item->total_harga;
        // }

        // $total = $subtotal + 15000;
        // $id_penjual = $daftar_keranjang[0]->penjual_id;
        // $id_keranjang = $daftar_keranjang[0]->id;

        // if ($id_penjual === null) {
        //     return response()->json(['error' => 'Tidak ada produk yang sesuai'], 400);
        // }

        // Transaksi::create([
        //     'id_pembeli' => $pembeli->id,
        //     'penjual_id' => $id_penjual,
        //     'id_keranjang' => $id_keranjang,
        //     'alamat' => $pembeli->alamat,
        //     'total_pembayaran' => $total,
        //     'kode_transaksi' => Str::random(6),
        // ]);
        // return redirect()->route('pembeli.resi');
    }

    public function show(Request $request, $id_transaksi)
    {
        $detail_transaksi = DetailTransaksi::where('id_transaksi', $id_transaksi)->with('product')->get();
        return view('checkout.show',compact('detail_transaksi'));
    }
}
