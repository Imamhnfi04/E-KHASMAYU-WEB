<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class pembeli extends FormRequest
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
        $nama_pembeli = 'required|unique:pembelis, nama_pembeli';
        $jenis_kelamin = 'required|unique:pembelis, jenis_kelamin';
        $tgl_lahir = 'required|unique:pembelis, tgl_lahir';
        $nomor_hp = 'required|unique:pembelis, nomor_hp';
        $negara = 'required|unique:pembelis, negara';
        $provinsi = 'required|unique:pembelis, provinsi';
        $kabupaten = 'required|unique:pembelis, kabupaten';
        $kecamatan = 'required|unique:pembelis, kecamatan';
        $desa = 'required|unique:pembelis, desa';
        $keterangan = 'required|unique:pembelis, keterangan';
        $kode_pos = 'required|unique:pembelis, kode_pos';
        $tandai_lokasi = 'required|unique:pembelis, tandai_lokasi';
    } else {
        $nama_pembeli = 'required|unique:pembelis, nama_pembeli, NULL';
        $jenis_kelamin = 'required|unique:pembelis, jenis_kelamin, NULL';
        $tgl_lahir = 'required|unique:pembelis, tgl_lahir, NULL';
        $nomor_hp = 'required|unique:pembelis, nomor_hp, NULL';
        $negara = 'required|unique:pembelis, negara, NULL';
        $provinsi = 'required|unique:pembelis, provinsi, NULL';
        $kabupaten = 'required|unique:pembelis, kabupaten, NULL';
        $kecamatan = 'required|unique:pembelis, kecamatan, NULL';
        $desa = 'required|unique:pembelis, desa, NULL';
        $keterangan = 'required|unique:pembelis, keterangan, NULL';
        $kode_pos = 'required|unique:pembelis, kode_pos, NULL';
        $tandai_lokasi = 'required|unique:pembelis, tandai_lokasi, NULL';
    }
    return [
        'nama_pembeli' => $nama_pembeli,
        'jenis_kelamin' => $jenis_kelamin,
        'tgl_lahir' => $tgl_lahir,
        'nomor_hp' => $nomor_hp,
        'negara' => $negara,
        'provinsi' => $provinsi,
        'kabupaten' => $kabupaten,
        'kecamatan' => $kecamatan,
        'desa' => $desa,
        'keterangan' => $keterangan,
        'kode_pos' => $kode_pos,
        'tandai_lokasi' => $tandai_lokasi 
    ];
    }
}
