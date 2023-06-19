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
        Schema::create('tokos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_penjual');
            $table->string('nama_toko', 50);
            $table->char('jam_buka', 20)->nullable();
            $table->string('banner_toko')->nullable();
            $table->string('informasi_toko',255)->nullable();
            $table->string('alamat_toko',100)->nullable();
            $table->char('keterangan',50)->default('Oleh - oleh khas Indramayu');
            $table->timestamps();

            $table->foreign('id_penjual')->references('id')->on('penjuals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tokos');
    }
};
