<?php

namespace App\Http\Controllers\penjual;

use App\Models\User;
use App\Models\Penjual;
use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
class RegisterPenjualController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(){
        $kategoris = Kategori::orderBy('nama_kategori','ASC')->get();
        $this->data['kategoris'] = $kategoris;
        return view('auth.registerpenjual',$this->data);
    }

    public function create(Request $data)
    {
        $result =  User::create([
            'nama' => $data['nama'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'penjual',
        ]);
        if ($result){
            Penjual::create([
            'nomor_hp' => $data['nomor_hp'],
            'alamat'=> $data['alamat'],
            'kode_pos' => $data['kode_pos'],
            'nama_toko' => $data['nama_toko'],
            'kategori_id' => $data['kategori_id'],
            'user_id' => $result->id,
            ]);
            return view('index');
        }else{
            $user = User::findOrFail($result->id);
            $user->delete();
        }
    }
}
