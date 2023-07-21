<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class PerusahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('perusahans')->insert([
            'nama_perusahan' => 'NIKE',
            'gambar_perusahan' => 'nike.png',
        ]);

        DB::table('perusahans')->insert([
            'nama_perusahan' => 'ADIDAS',
            'gambar_perusahan' => 'adidas.png',
        ]);

        DB::table('perusahans')->insert([
            'nama_perusahan' => 'PUMA',
            'gambar_perusahan' => 'puma.png',
        ]);

        DB::table('perusahans')->insert([
            'nama_perusahan' => 'CONVERSE',
            'gambar_perusahan' => 'converse.png',
        ]);
    }
}