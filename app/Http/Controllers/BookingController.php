<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function booking(){
        $bookings=Booking::all();
        return view ('booking.booking',compact('bookings'));
    }

    public function create(){
        return view ('booking.create');
    }

    public function store(Request $request) {
        // Validasi dan simpan data booking
        $validatedData = $request->validate([
            'nama' => 'required',
            'jenis_kendaraan' => 'required',
            'merk' => 'required',
            'type' => 'required',
            'tanggal_booking' => 'required',
            'harga' => 'required',
        ]);
    
        // Simpan data ke database
        Booking::create($validatedData);
    
        // Redirect atau kembali dengan pesan sukses
        return redirect()->route('booking.dashboard');
    }
}
