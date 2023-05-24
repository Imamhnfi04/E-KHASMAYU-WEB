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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_toko');
            $table->unsignedBigInteger('id_pelanggan');
            $table->unsignedBigInteger('id_produk');
<<<<<<< Updated upstream
            $table->unsignedBigInteger('id_pemesanan');
            $table->string('alamat_pengiriman',100);
            $table->char('ongkir', 10);
            $table->char('tgl_pemesanan', 20)->nullable();
            $table->char('total_belanja',20)->nullable();
            $table->string('status_pemesanan',50)->nullable();
            $table->string('jumlah_pemesanan',50)->nullable();
            
=======
            $table->string('alamat_pengiriman',100);
            $table->integer('ongkir');
            $table->char('tgl_pemesanan', 20)->nullable();
            $table->integer('total_belanja')->nullable();
            $table->string('status_pemesanan',50)->nullable();
            $table->integer('jumlah_pemesanan')->nullable();

>>>>>>> Stashed changes
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
