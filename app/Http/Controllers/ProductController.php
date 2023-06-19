<?php

namespace App\Http\Controllers;

use App\Models\Penjual;
use App\Models\Product;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $produks = Product::where('id_penjual',"=", Auth::user()->penjual->id)->get();
        $this->data['produk'] = $produks;

        // $product = Produk::latest()->paginate(5);

        return view('penjual.product.index', $this->data);
    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('penjual.product.create');

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        $request->validate([

            'name' => 'required|string',
            'detail' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harga' => 'required',
            'stok' => 'required',
            'berat' => 'required'

        ]);



        $input = $request->all();
        // $test = Penjual::with('toko
        // ')->get();
        // dd($test);
        // $input['id_toko'] = auth()->user()->penjual->toko->id;
        $input['id_penjual'] = auth()->user()->penjual->id;


        if ($image = $request->file('image')) {

            $destinationPath = 'image/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";

        }

        Product::create($input);

        return redirect()->route('product.index')

                        ->with('success','Product created successfully.');

    }



    /**

     * Display the specified resource.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function show(Product $product)

    {

        return view('penjual.product.show',compact('product'));

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function edit(Product $product)

    {

        return view('penjual.product.edit',compact('product'));

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Product $product)

    {
        $request->validate([
            'name' => 'required|string',
            'detail' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'berat' => 'required'
        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
        $product->update($input);
        return redirect()->route('product.index')
                        ->with('success','Product updated successfully');

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function destroy(Product $product)

    {
        $product->delete();
        return redirect()->route('product.index')
                        ->with('success','Product deleted successfully');
    }

}
