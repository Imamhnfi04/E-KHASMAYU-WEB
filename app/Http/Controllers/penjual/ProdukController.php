<?php

namespace App\Http\Controllers\penjual;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::where('id_penjual',"=", Auth::user()->penjual->id)->get();
        $this->data['produk'] = $produks;

        return redirect('penjual/produk/dashboard', $this->data);
    }

 public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'id_penjual' => 'required',
            'id_kategori' => 'required',
            'nama_produk' => 'required',
            'deskripsi_produk' => 'required',
            'harga' => 'required|numeric',
            'status' => 'required',
            'stok' => 'required|numeric',
            'gambar' => 'nullable',
        ]);
            // if($request->file('gambar') == '') {
            //     $gambar = NULL;
            // } else {
            //     $file = $request->file('gambar');
            //     $getTime = Carbon::now();
            //     $getExtension  = $file->getClientOriginalExtension();
            //     $fileName = rand(11111,99999).'-'.$getTime->format('Y-m-d-H-i-s').'.'.$getExtension;
            //     $request->file('gambar')->move("images/user", $fileName);
            //     $gambar = $fileName;
            // }

            DB::select('CALL tambah_produk("'. $request->id_penjual .'","'. $request->id_kategori .'","'. $request->nama_produk .'","'. $request->deskripsi_produk .'","'. $request->harga .'","'. $request->gambar .'","'. $request->status .'","'. $request->stok .'","'. $request->kategori .'")');
            //DB::select('CALL tambah_produk("1","2","abksdbka","makanan","20000","mangga.jpg","baru","9","makanan")');
            return redirect('/basdat')->with('success', 'Produk berhasil ditambahkan.');
    }
}
