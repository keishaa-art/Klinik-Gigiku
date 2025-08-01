<?php

use App\Http\Controllers\Admin\PemeriksaanController;
use App\Http\Controllers\Admin\CabangController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pemeriksaan', PemeriksaanController::class);
Route::resource('cabang', CabangController::class);
