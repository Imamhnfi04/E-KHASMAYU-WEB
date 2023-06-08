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
        Schema::create('pembelis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('jenis_kelamin', 10)->nullable();
            $table->char('tgl_lahir', 20)->nullable();
            $table->char('nomor_hp',20);
            $table->char('alamat',50);
            $table->char('kode_pos',10);
            $table->char('tandai_lokasi',10);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelis');
    }
};
