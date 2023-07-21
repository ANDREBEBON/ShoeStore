<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    public function perusahan(){
        return $this->belongsTo(perusahan::class, 'perusahan_id', 'id');
    }

    public function pesanan_details(){
        return $this->hasMany(pesananDetail::class, 'produk_id', 'id');
    }
}