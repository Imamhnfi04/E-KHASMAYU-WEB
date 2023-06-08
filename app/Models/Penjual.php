<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjual extends Model
{
    use HasFactory;
    protected $fillable = [
            'user_id',
            'kategori_id',
            'id_kategori2',
            'id_kategori3',
            'nama_toko',
            'jenis_kelamin',
            'tgl_lahir',
            'nomor_hp',
            'negara',
            'provinsi',
            'kabupaten',
            'kecamatan',
            'desa',
            'alamat',
            'keterangan',
            'kode_pos',
        ];

        public function user(){
            return $this->belongsTo('App\Models\User');
        }
        public function kategoris(){
            return $this->belongsTo('App\Models\Kategori');
        }
}
