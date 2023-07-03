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
            $table->unsignedBigInteger('penjual_id');
            $table->unsignedBigInteger('toko_id');
            $table->string('name');
            $table->text('detail');
            $table->string('image');
            $table->integer('stok');
            $table->decimal('harga');
            $table->integer('berat');
            $table->timestamps();

            $table->foreign('penjual_id')->references('id')->on('penjuals')->onDelete('cascade');
            $table->foreign('toko_id')->references('id')->on('tokos')->onDelete('cascade');
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
