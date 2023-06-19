<?php

namespace App\Http\Controllers\penjual;

use App\Http\Controllers\Controller;
use App\Models\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TokoPenjualController extends Controller
{
    public function index()
    {
        $toko = Toko::where('id_penjual',"=", Auth::user()->penjual->id)->get();
        $this->data['toko'] = $toko;
        return view('penjual.toko.index', $this->data);
    }

    public function update(Request $request, Toko $toko)
    {

        $request->validate([

            'namea_toko' => 'required',

            'keterangan' => 'required'

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



        $toko->update($input);



        return redirect()->route('penjual.product.index')

                        ->with('success','Product updated successfully');

    }
}
