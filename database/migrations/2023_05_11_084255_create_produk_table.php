<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->integer('id_penjual');
            $table->integer('id_kategori');
            $table->string('nama_produk', 20);
            $table->string('deskripsi_produk',100);
            $table->integer('harga_produk');
            $table->char('gambar_produk',100);
            $table->string('status',20);
            $table->integer('stok');
            $table->string('kategori_produk',50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
