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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_penjual');
            //$table->unsignedBigInteger('id_toko');
            $table->string('name');
            $table->text('detail');
            $table->string('image');
            $table->integer('stok');
            $table->decimal('harga');
            $table->integer('berat');
            $table->timestamps();

            $table->foreign('id_penjual')->references('id')->on('penjuals')->onDelete('cascade');
            //$table->foreign('id_toko')->references('id')->on('tokos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
