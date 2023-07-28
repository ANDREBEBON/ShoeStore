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

        DB::table('produks')->insert([
            'nama_produk' => 'Air Jordan 1 Low',
            'harga_produk' => 3000000,
            'ukuran_produk' => 42,
            'gambar_produk' => 'Air Jordan 1 Low.png',
            'perusahan_id' => 1,
        ]);

        DB::table('produks')->insert([
            'nama_produk' => 'Air Jordan 1 Mid',
            'harga_produk' => 2000000,
            'ukuran_produk' => 41,
            'gambar_produk' => 'Air Jordan 1 Mid.png',
            'perusahan_id' => 1,
        ]);

        DB::table('produks')->insert([
            'nama_produk' => 'Air Jordan 6 Retro',
            'harga_produk' => 2500000,
            'ukuran_produk' => 43,
            'gambar_produk' => 'Air Jordan 6 Retro.png',
            'perusahan_id' => 1,
        ]);

        DB::table('produks')->insert([
            'nama_produk' => 'Air Jordan 7 Retro SE',
            'harga_produk' => 2600000,
            'ukuran_produk' => 41,
            'gambar_produk' => 'Air Jordan 7 Retro SE.png',
            'perusahan_id' => 1,
        ]);

        DB::table('produks')->insert([
            'nama_produk' => 'Air Jordan 13 Retro',
            'harga_produk' => 3700000,
            'ukuran_produk' => 40,
            'gambar_produk' => 'Air Jordan 13 Retro.png',
            'perusahan_id' => 1,
        ]);

        DB::table('produks')->insert([
            'nama_produk' => 'Nike Air Force 1 07',
            'harga_produk' => 2700000,
            'ukuran_produk' => 43,
            'gambar_produk' => 'Nike Air Force 1 07.png',
            'perusahan_id' => 1,
        ]);

        DB::table('produks')->insert([
            'nama_produk' => 'Nike Air Max Plus III',
            'harga_produk' => 2200000,
            'ukuran_produk' => 40,
            'gambar_produk' => 'Nike Air Max Plus III.png',
            'perusahan_id' => 1,
        ]);

        DB::table('produks')->insert([
            'nama_produk' => 'Nike Alphafly 2',
            'harga_produk' => 2900000,
            'ukuran_produk' => 42,
            'gambar_produk' => 'Nike Alphafly 2.png',
            'perusahan_id' => 1,
        ]);

        DB::table('produks')->insert([
            'nama_produk' => 'Nike Zegama',
            'harga_produk' => 2900000,
            'ukuran_produk' => 43,
            'gambar_produk' => 'Nike Zegama.png',
            'perusahan_id' => 1,
        ]);

        DB::table('produks')->insert([
            'nama_produk' => '4DFWD 3 RUNNING SHOES',
            'harga_produk' => 2700000,
            'ukuran_produk' => 42,
            'gambar_produk' => '4DFWD 3 RUNNING SHOES.png',
            'perusahan_id' => 2,
        ]);

        DB::table('produks')->insert([
            'nama_produk' => 'CAMPUS SHOES',
            'harga_produk' => 2500000,
            'ukuran_produk' => 40,
            'gambar_produk' => 'CAMPUS SHOES.png',
            'perusahan_id' => 2,
        ]);

        DB::table('produks')->insert([
            'nama_produk' => 'SEPATU ADISTAR CS 2.0',
            'harga_produk' => 2500000,
            'ukuran_produk' => 40,
            'gambar_produk' => 'SEPATU ADISTAR CS 2.0.png',
            'perusahan_id' => 2,
        ]);

        DB::table('produks')->insert([
            'nama_produk' => 'SEPATU PARK STREET',
            'harga_produk' => 2400000,
            'ukuran_produk' => 43,
            'gambar_produk' => 'SEPATU PARK STREET.png',
            'perusahan_id' => 2,
        ]);

        DB::table('produks')->insert([
            'nama_produk' => 'SEPATU SAMBA DECON',
            'harga_produk' => 2400000,
            'ukuran_produk' => 43,
            'gambar_produk' => 'SEPATU SAMBA DECON.png',
            'perusahan_id' => 2,
        ]);

        DB::table('produks')->insert([
            'nama_produk' => 'SEPATU SUPERSTAR XLG',
            'harga_produk' => 2700000,
            'ukuran_produk' => 42,
            'gambar_produk' => 'SEPATU SUPERSTAR XLG.png',
            'perusahan_id' => 2,
        ]);

        DB::table('produks')->insert([
            'nama_produk' => 'SEPATU SUPERSTAR XLG',
            'harga_produk' => 2700000,
            'ukuran_produk' => 42,
            'gambar_produk' => 'SEPATU SUPERSTAR XLG.png',
            'perusahan_id' => 2,
        ]);

        DB::table('produks')->insert([
            'nama_produk' => 'ForeverRUN NITRO™ Futrograde Mens Running Shoes',
            'harga_produk' => 2700000,
            'ukuran_produk' => 42,
            'gambar_produk' => 'ForeverRUN NITRO™ Futrograde Mens Running Shoes.png',
            'perusahan_id' => 3,
        ]);


        DB::table('produks')->insert([
            'nama_produk' => 'PUMA NYC Suede Mid Park Flagship Mens Sneaker (1)',
            'harga_produk' => 2700000,
            'ukuran_produk' => 42,
            'gambar_produk' => 'PUMA NYC Suede Mid Park Flagship Mens Sneaker (1).png',
            'perusahan_id' => 3,
        ]);

                DB::table('produks')->insert([
            'nama_produk' => 'PUMA x Palm Tree Crew RS-X Sneakers',
            'harga_produk' => 2700000,
            'ukuran_produk' => 42,
            'gambar_produk' => 'PUMA x Palm Tree Crew RS-X Sneakers.png',
            'perusahan_id' => 3,
        ]);
                DB::table('produks')->insert([
            'nama_produk' => 'RS-XL Playlist Mens Sneakers',
            'harga_produk' => 2500000,
            'ukuran_produk' => 42,
            'gambar_produk' => 'RS-XL Playlist Mens Sneakers.png',
            'perusahan_id' => 3,
        ]);

                DB::table('produks')->insert([
            'nama_produk' => 'Sparco Driving Shoes',
            'harga_produk' => 2500000,
            'ukuran_produk' => 40,
            'gambar_produk' => 'Sparco Driving Shoes.png',
            'perusahan_id' => 3,
        ]);

                DB::table('produks')->insert([
            'nama_produk' => 'Suede Mid XXI Sneakers',
            'harga_produk' => 2300000,
            'ukuran_produk' => 44,
            'gambar_produk' => 'Suede Mid XXI Sneakers.png',
            'perusahan_id' => 3,
        ]);

                        DB::table('produks')->insert([
            'nama_produk' => 'Super Liga OG Retro Sneakers',
            'harga_produk' => 2300000,
            'ukuran_produk' => 44,
            'gambar_produk' => 'Super Liga OG Retro Sneakers.png',
            'perusahan_id' => 3,
        ]);

                        DB::table('produks')->insert([
            'nama_produk' => 'All Star BB Prototype CX Granddaddy Jelly',
            'harga_produk' => 2600000,
            'ukuran_produk' => 42,
            'gambar_produk' => 'All Star BB Prototype CX Granddaddy Jelly.png',
            'perusahan_id' => 4,
        ]);

                        DB::table('produks')->insert([
            'nama_produk' => 'Chuck 70',
            'harga_produk' => 2600000,
            'ukuran_produk' => 42,
            'gambar_produk' => 'Chuck 70.png',
            'perusahan_id' => 4,
        ]);

        DB::table('produks')->insert([
            'nama_produk' => 'Run Star Hike Canvas Platform',
            'harga_produk' => 2600000,
            'ukuran_produk' => 42,
            'gambar_produk' => 'Run Star Hike Canvas Platform.png',
            'perusahan_id' => 4,
        ]);

        DB::table('produks')->insert([
            'nama_produk' => 'Run Star Motion CX Platform Canvas',
            'harga_produk' => 2600000,
            'ukuran_produk' => 42,
            'gambar_produk' => 'Run Star Motion CX Platform Canvas.png',
            'perusahan_id' => 4,
        ]);

        DB::table('produks')->insert([
            'nama_produk' => 'Run Star Motion CX Platform Marbled',
            'harga_produk' => 2600000,
            'ukuran_produk' => 42,
            'gambar_produk' => 'Run Star Motion CX Platform Marbled.png',
            'perusahan_id' => 4,
        ]);

        DB::table('produks')->insert([
            'nama_produk' => 'Run Star Motion Foundational',
            'harga_produk' => 2600000,
            'ukuran_produk' => 40,
            'gambar_produk' => 'Run Star Motion Foundational.png',
            'perusahan_id' => 4,
        ]);

        DB::table('produks')->insert([
            'nama_produk' => 'Star Player 76 Premium Canvas',
            'harga_produk' => 2600000,
            'ukuran_produk' => 40,
            'gambar_produk' => 'Star Player 76 Premium Canvas.png',
            'perusahan_id' => 4,
        ]);




    }
}