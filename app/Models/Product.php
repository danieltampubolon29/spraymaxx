<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = ['jenis_kendaraan', 'nama_tipe', 'harga', 'brand_id'];
    public function brand()
    {
        return $this->belongsTo(Brand::class);  
    }
}
