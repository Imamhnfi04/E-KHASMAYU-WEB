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
            $table->unsignedBigInteger('id_kategori1');
            $table->unsignedBigInteger('id_kategori2');
            $table->unsignedBigInteger('id_kategori3');
            $table->string('nama_penjual',100);
            $table->char('nama_toko',100);
            $table->string('jenis_kelamin', 10);
            $table->char('tgl_lahir', 20);
            $table->char('nomor_hp',20)->nullable();
            $table->string('negara',50);
            $table->string('provinsi',50);
            $table->string('kabupaten',50);
            $table->string('kecamatan',50);
            $table->string('desa',50);
            $table->char('keterangan',50);
            $table->char('kode_pos',10);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
