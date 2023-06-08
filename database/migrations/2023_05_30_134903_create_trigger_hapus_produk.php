<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared('
        CREATE TRIGGER hapus_produk AFTER DELETE ON produk FOR EACH ROW
            INSERT INTO log_produk(id,nama_produk, waktu) VALUES (OLD.id, OLD.nama_produk, NOW());
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER hapus_produk');
    }
};
