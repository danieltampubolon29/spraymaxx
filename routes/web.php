<?php

use App\Http\Controllers\SpraymaxxController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/spraymaxx', [SpraymaxxController::class, 'beranda'])->name('spraymaxx.beranda');