<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
<<<<<<< Updated upstream

    protected $table = 'kategori';

    protected $guarded = [''];
=======
    protected $fillable = [
        'nama_kategori',

    ];

    public function kategori(){
        return $this->belongsTo('App\Models\Kategori');
    }
>>>>>>> Stashed changes
}
