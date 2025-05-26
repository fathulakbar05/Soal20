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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id('id_peminjaman');
            //$table->foreignId('id_buku')->constrained('bukus')->onDelete('cascade');
            $table->foreignId('id_buku')->constrained('bukus', 'id_buku')->onDelete('cascade');
            $table->string('nama_peminjam');
            $table->string('tanggal_pinjam');
            $table->string('tanggal_kembali');
            $table->string('status')->default('dipinjam'); // Status peminjaman: dipinjam, dikembalikan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
