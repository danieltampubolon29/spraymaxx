<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpraymaxxController extends Controller
{
    function beranda() {
        return view ('spraymaxx.beranda');
    }
}
