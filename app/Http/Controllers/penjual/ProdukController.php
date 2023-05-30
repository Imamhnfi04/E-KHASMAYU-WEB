<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|max:2048',
        ]);
            if($request->file('gambar') == '') {
                $gambar = NULL;
            } else {
                $file = $request->file('gambar');
                $getTime = Carbon::now();
                $getExtension  = $file->getClientOriginalExtension();
                $fileName = rand(11111,99999).'-'.$getTime->format('Y-m-d-H-i-s').'.'.$getExtension;
                $request->file('gambar')->move("images/user", $fileName);
                $gambar = $fileName;
            }


            $produk = new Produk();
            $produk->nama = $request->input('nama');
            $produk->harga = $request->input('harga');
            $produk->gambar = $gambar;
            $produk->save();

        return redirect()->route('penjual.dashboard')->with('success', 'Produk berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        //
    }
}
