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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pembeli');
            $table->integer('penjual_id')->nullable();
            $table->integer('id_toko');
            $table->integer('id_keranjang')->nullable();
            $table->string('alamat');
            $table->integer('ongkir')->default(15000);
            $table->integer('total_pembayaran')->nullable();
            $table->string('status_pemesanan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
