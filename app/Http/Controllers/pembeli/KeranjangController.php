<?php

namespace App\Http\Controllers\pembeli;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keranjang;
use App\Models\Pembeli;
use App\Models\Penjual;
use App\Models\Product;

class KeranjangController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $pembeli = Pembeli::where('user_id', auth()->user()->id)->first();
        $daftar_keranjang = Keranjang::where('id_pembeli', $pembeli->id)->with('product')->get();
        $subtotal = 0;
        foreach ($daftar_keranjang as $item) {
            $subtotal += $item->total_harga;
        }

        $total = $subtotal + 15000;

        return view('keranjang.keranjang', [
            'daftar_keranjang' => $daftar_keranjang,
            'total' => $total,
            'subtotal' => $subtotal
        ]);
    }


    public function create($id_produk) {
        $product = Product::findOrFail($id_produk);
        return view('keranjang.create', ['product'=> $product]);
    }

    public function store(Request $request)
{
    $productId = $request->id_produk;
    $product = Product::find($productId);

    if (!$product) {
        // Produk tidak ditemukan, lakukan penanganan kesalahan sesuai kebutuhan aplikasi Anda
        // Misalnya, tampilkan pesan error atau alihkan ke halaman yang sesuai
        // Di sini kita akan mengembalikan response dengan pesan error
        return response()->json(['error' => 'Produk tidak ditemukan'], 404);
    }

    $pembeli = Pembeli::where('user_id', auth()->user()->id)->first();
    $penjual = $product->penjual;

    if (!$penjual) {
        // Penjual tidak ditemukan, lakukan penanganan kesalahan sesuai kebutuhan aplikasi Anda
        // Misalnya, tampilkan pesan error atau alihkan ke halaman yang sesuai
        // Di sini kita akan mengembalikan response dengan pesan error
        return response()->json(['error' => 'Penjual tidak ditemukan'], 404);
    }

    $jumlah = $request->jumlah;
    $total = $jumlah * $product->harga;

    $keranjang = new Keranjang;
    $keranjang->id_product = $productId;
    $keranjang->id_pembeli = $pembeli->id;
    $keranjang->penjual_id = $penjual->id;
    $keranjang->jumlah = $jumlah;
    $keranjang->total_harga = $total;
    $keranjang->save();

    return redirect()->route('pembeli.keranjang');
}


    public function destroy($id_keranjang) {
        $keranjang = Keranjang::findOrFail($id_keranjang);
        $keranjang->delete();
        return redirect()->route('pembeli.keranjang')
                        ->with('success','Product deleted successfully');
    }

    public function total($id_keranjang){
        $keranjang = Keranjang::findOrFail($id_keranjang);

    }
}
