<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'jenis_kelamin',
        'tgl_lahir',
        'nomor_hp',
        'alamat',
        'tandai_lokasi',
        'kode_pos',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
