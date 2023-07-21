<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesananDetail extends Model
{

    protected $fillable = [
        'jumlah_pemesanan_detail',
        'total_harga_pemesanan_detail',
        'nama_pemesanan_detail',
        'nomor_pemesanan_detail',
        'pesanan_id',
        'produk_id',
    ];

    public function pesanan(){
        return $this->belongsTo(pesanan::class, 'pesanan_id ', 'id');
    }

    public function produk(){
        return $this->belongsTo(produk::class, 'produk_id ', 'id');
    }
}