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
        Schema::create('pesanan_details', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah_pemesanan_detail');
            $table->integer('total_harga_pemesanan_detail');
            $table->string('nama_pemesanan_detail')->nullable();
            $table->integer('nomor_pemesanan_detail')->nullable();
            $table->integer('pesanan_id');
            $table->integer('produk_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan_details');
    }
};