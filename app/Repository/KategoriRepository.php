<?php

namespace App\Repository;
use App\Models\Kategori;

class KategoriRepository
{
    public function createTransaction(array $data)
    {
        return Kategori::create($data);
    }
}

