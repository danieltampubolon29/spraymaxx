<?php

namespace App\Http\Controllers\Booking;

use App\Models\Booking;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{   

    public function index()
    {
        $products = Product::all();
        return view('booking.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bookings = Booking::all(); 
        return view('booking.data', compact('bookings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'no_wa' => 'required',
            'tanggal_booking' => 'required',
            'nama_brand' => 'required',
            'jenis_kendaraan' => 'required',
            'nama_tipe' => 'required',
            'harga' => 'required',
            'email' => 'required',
        ]);
    
        // Simpan data ke database
        Booking::create($data);
    
        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('booking.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $auth = Auth::user()->email;
        $products=Product::find($id);
        return view ('booking.create', compact('products', 'auth'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
