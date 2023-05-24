<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Penjual;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class registerpenjualController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function index()
     {
        return view ('auth.register.registerpenjual');
     }
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function create(Request $data)
    {
        $result = User::create([
            'nama' => $data['nama'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'penjual',
        ]);
        if ($result) {
            Penjual::create([
                'nama_toko' => $data['nama_toko'],
                'jenis_kelamin' => $data['jenis_kelamin'],
                'kode_pos' => $data['kode_pos'],
                'alamat' => $data['alamat'],
                'nomor_hp' => $data['nomor_hp'],
                'keterangan' => $data['keterangan'],
                'kategori_1' => $data['id_kategori1'],
                'user_id' => $result->id,
            ]);
            // Kategori::create([
            //     'nama_kategori' => $data['nama_kategori']
            // ]);
            return view('auth.login');
        } else {
            $user = User::findOrFail($result->id);
            $user->delete();
        }
    }
}
