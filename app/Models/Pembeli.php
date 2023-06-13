<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;

    protected $fillable = [
            'user_id',
            'nama_pembeli',
            'jenis_kelamin',
            'tgl_lahir',
            'nomor_hp',
            'negara',
            'provinsi',
            'kabupaten',
            'kecamatan',
            'desa',
            'keterangan',
            'kode_pos',
            'tandai_lokasi',
        ];

        public function user(){
            return $this->belongsTo('App\Models\User');
        }
}
