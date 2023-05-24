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
<<<<<<< Updated upstream
            $table->unsignedBigInteger('id_toko');
            $table->unsignedBigInteger('id_kategori');
            $table->unsignedBigInteger('id_produk');
            $table->string('deskripsi_produk',100);
            $table->char('harga_produk', 10);
            $table->char('gambar_produk',100);
            $table->string('status',20);
            $table->string('stok',20);
            $table->string('kategori_produk',50)->nullable();
            
=======
            $table->unsignedBigInteger('id_penjual');
            $table->unsignedBigInteger('id_kategori');
            $table->string('nama_produk', 100);
            $table->string('deskripsi_produk',100);
            $table->integer('harga_produk');
            $table->char('gambar_produk',100);
            $table->string('status',20);
            $table->integer('stok');
            $table->string('kategori_produk',50)->nullable();

>>>>>>> Stashed changes
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
