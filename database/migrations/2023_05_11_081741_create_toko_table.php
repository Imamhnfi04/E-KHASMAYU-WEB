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
        Schema::create('toko', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_toko');
            $table->unsignedBigInteger('id_penjual');
            $table->string('nama_toko', 50);
            $table->char('jam_buka', 20)->nullable();
            $table->char('banner_toko',20)->nullable();
            $table->string('informasi_toko',255)->nullable();
            $table->string('alamat_toko',100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('toko');
    }
};
