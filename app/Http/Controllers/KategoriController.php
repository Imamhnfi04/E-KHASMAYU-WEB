<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\KategoriRepository;
use Illuminate\Support\Facades\Validator;

class KategoriController extends Controller
{
    protected $trasactionKategoriRepo;

    public function __construct(KategoriRepository $trasactionKategoriRepo)
    {
        $this->trasactionKategoriRepo = $trasactionKategoriRepo;
    }

    public function store(Request $request)
    {
        $message = [
            "required" => "Kolom :attribute Harus Diisi"
        ];
        $validateData =Validator::make($request->all(),[
            
            'id_toko' => 'required',
            'nama_kategori' => 'required',
        ], $message);
        if ($validateData->fails()){
            return response()->json(["errors" => $validateData->errors()], 422);
        }
        $kategori = $this->trasactionKategoriRepo->createTransaction($request->all());

        return response()->json(["pesan" => "transaksi berhasil"], 200);
    }
}
