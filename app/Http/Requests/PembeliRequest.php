<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PembeliRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
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
        // $tgl_lahir = 'required|unique:pembelis, tgl_lahir'.$id;
        $alamat = 'required|unique:pembelis, alamat'.$id;
        // $nomor_hp = 'required|unique:pembelis, nomor_hp'.$id;
        // $keterangan = 'required|unique:pembelis, keterangan'.$id;
        $kode_pos = 'required|unique:pembelis, kode_pos';
        $tandai_lokasi = 'required|unique:pembelis, tandai_lokasi'.$id;
    } else {
        // $tgl_lahir = 'required|unique:pembelis, tgl_lahir, NULL';
        // $nomor_hp = 'required|unique:pembelis, nomor_hp, NULL';
        $alamat = 'required|unique:pembelis, alamat';
        // $keterangan = 'required|unique:pembelis, keterangan, NULL';
        $kode_pos = 'required|unique:pembelis, kode_pos, NULL';
        $tandai_lokasi = 'required|unique:pembelis, tandai_lokasi, NULL';
    }
    return [
        'jenis_kelamin' => 'required|string|max:10',
        'tandai_lokasi' => 'required|string|max:10',
        // 'tgl_lahir' => $tgl_lahir,
        'nomor_hp' => 'required|string|max:12',
        'alamat' => 'required|string|max:255',
        // 'keterangan' => $keterangan,
        'kode_pos' => 'required|string|max:12',
    ];
    }
}
