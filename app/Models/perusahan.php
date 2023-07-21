<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perusahan extends Model
{
    public function produks()
    {
        return $this->hasMany(Product::class, 'produk_id', 'id');
    }
}