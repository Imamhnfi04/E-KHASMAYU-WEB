<?php

namespace App\Http\Controllers\pembeli;

use App\Http\Controllers\Controller;
use App\Http\Requests\PembeliRequest;
use App\Models\Pembeli;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $pembeli = Pembeli::where('user_id',auth()->user()->id)->first();
        $this->data['data'] = $pembeli;
        return view('pembeli.profile',$this->data);
    }

    public function update(PembeliRequest $request)
    {
        $params = $request->all();

        $request->validate([
            'current_password' => 'nullable|required_with:new_password',
            'new_password' => 'nullable|min:8|max:12|required_with:current_password',
            'password_confirmation' => 'nullable|min:8|max:12|required_with:new_password|same:new_password'
        ]);

        $user = User::findOrFail(Auth::user()->id);
        if(!is_null($request->input('current_password'))){
            if(Hash::check($request->input('current_password'), $user->password)){
                $user->password = Hash::make($request->input('new_password'));
            }else{
                Session()->flash('error', 'Data gagal disimpan');
            }
        }

        $pembeli = Pembeli::where('user_id',auth()->user()->id)->first();
        if ($pembeli->update($params) && $user->save()) {
            Session()->flash('success', 'Data Berhasil Disimpan');
        } else {
            Session()->flash('error', 'Data gagal disimpan');
        }
        return redirect()->route('pembeli.profile');
    }

}
