<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PenjualRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
    $id = $this->get('id');
    if ($this->method() == 'PUT') {
        $nama_penjual = 'required|unique:penjuals, nama_penjual';
        $nama_toko = 'required|unique:penjuals, nama_toko';
        $jenis_kelamin = 'required|unique:penjuals, jenis_kelamin';
        $tgl_lahir = 'required|unique:penjuals, tgl_lahir';
        $nomor_hp = 'required|unique:penjuals, nomor_hp';
        $negara = 'required|unique:penjuals, negara';
        $provinsi = 'required|unique:penjuals, provinsi';
        $kabupaten = 'required|unique:penjuals, kabupaten';
        $kecamatan = 'required|unique:penjuals, kecamatan';
        $desa = 'required|unique:penjuals, desa';
        $keterangan = 'required|unique:penjuals, keterangan';
        $kode_pos = 'required|unique:penjuals, kode_pos';
    } else {
        $nama_penjual = 'required|unique:penjuals, nama_penjual, NULL';
        $nama_toko = 'required|unique:penjuals, nama_toko, NULL';
        $jenis_kelamin = 'required|unique:penjuals, jenis_kelamin, NULL';
        $tgl_lahir = 'required|unique:penjuals, tgl_lahir, NULL';
        $nomor_hp = 'required|unique:penjuals, nomor_hp, NULL';
        $negara = 'required|unique:penjuals, negara, NULL';
        $provinsi = 'required|unique:penjuals, provinsi, NULL';
        $kabupaten = 'required|unique:penjuals, kabupaten, NULL';
        $kecamatan = 'required|unique:penjuals, kecamatan, NULL';
        $desa = 'required|unique:penjuals, desa, NULL';
        $keterangan = 'required|unique:penjuals, keterangan, NULL';
        $kode_pos = 'required|unique:penjuals, kode_pos, NULL';
    }
    return [
        'nama_penjual' => $nama_penjual,
        'nama_toko' => $nama_toko,
        'jenis_kelamin' => $jenis_kelamin,
        'tgl_lahir' => $tgl_lahir,
        'nomor_hp' => $nomor_hp,
        'negara' => $negara,
        'provinsi' => $provinsi,
        'kabupaten' => $kabupaten,
        'kecamatan' => $kecamatan,
        'desa' => $desa,
        'keterangan' => $keterangan,
        'kode_pos' => $kode_pos
    ];
}
}
