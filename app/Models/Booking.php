<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $fillable=[
        'nama',
        'no_wa',
        'tanggal_booking',
        'nama_brand',
        'jenis_kendaraan',
        'nama_tipe',
        'harga',
        'email',
    ];
}

