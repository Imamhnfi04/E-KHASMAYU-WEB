<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\kategori;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        kategori::create([
            'nama_kategori' => 'Makanan'
        ]);
        kategori::create([
            'nama_kategori' => 'Pakaian'
        ]);
        kategori::create([
            'nama_kategori' => 'Kerajinan'
        ]);
    }
}
