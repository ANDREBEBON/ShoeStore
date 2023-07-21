<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produks')->insert([
            'nama_produk' => 'Air Force 1',
            'harga_produk' => 1500000,
            'ukuran_produk' => 32,
            'gambar_produk' => 'Air Force 1.jpg',
            'perusahan_id' => 1,
        ]);

        DB::table('produks')->insert([
            'nama_produk' => 'SAMBA DECON SHOES',
            'harga_produk' => 1200000,
            'ukuran_produk' => 34,
            'gambar_produk' => 'SAMBA DECON SHOES.jpg',
            'perusahan_id' => 2,
        ]);

        DB::table('produks')->insert([
            'nama_produk' => 'Running shoes',
            'harga_produk' => 1700000,
            'ukuran_produk' => 30,
            'gambar_produk' => 'Running shoes.jpg',
            'perusahan_id' => 3,
        ]);

        DB::table('produks')->insert([
            'nama_produk' => 'Star Player 76 Premium Canvas',
            'harga_produk' => 1199000,
            'ukuran_produk' => 30,
            'gambar_produk' => 'Star Player 76 Premium Canvas.jpg',
            'perusahan_id' => 4,
        ]);
    }
}