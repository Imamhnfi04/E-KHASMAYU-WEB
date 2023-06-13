<?php

namespace App\Http\Controllers;
use App\Models\postproduk;
use Illuminate\Http\Request;

class PostprodukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    

    public function index()
    {
        // $title = 'PostProduk';
        // $slug = 'postproduk';
        $dataPostProduk = postproduk::all();
        return view('produk.index', compact('title','slug','dataPostProduk'));
    }

    /**
     * Show the form for creating a new resource.s
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Produk E-Khasmayu';
        $slug = 'postproduk';
        $dataPostProduk = postproduk::all();
        return view('postproduk.create', compact('title','slug','dataPostProduk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $file_name = $request->image->getClientOriginalName();
        $request->image->storeAs('public/imageproduk', $file_name );
        $images = $file_name;
        // $request->file->store('product', 'public');
        $result = postproduk::insert([
            'id' => $request->id,
            'foto_produk' => $images,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        if($result){
            return redirect('/postproduk');
        }else{
            return $this->create();
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        postproduk::where('id', $id)
                ->delete();
        return redirect('/postproduk');
    }
}
