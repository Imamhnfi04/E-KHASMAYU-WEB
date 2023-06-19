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
        Schema::create('penjuals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('kategori_id');
            $table->unsignedBigInteger('id_kategori2')->nullable();
            $table->unsignedBigInteger('id_kategori3')->nullable();
            $table->string('jenis_kelamin', 10)->nullable();
            $table->char('tgl_lahir', 20)->nullable();
            $table->char('nomor_hp',20);
            $table->char('alamat',50);
            $table->string('negara',50)->nullable();
            $table->string('provinsi',50)->nullable();
            $table->string('kabupaten',50)->nullable();
            $table->string('kecamatan',50)->nullable();
            $table->string('desa',50)->nullable();
            $table->char('kode_pos',10)->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->foreign('kategori_id')->references('id')->on('kategoriS')->onDelete('cascade');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjuals');
    }
};
