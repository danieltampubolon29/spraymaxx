<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $booking = Booking::all();
        return view('admin.dashboard', compact('booking'));
    }
}
