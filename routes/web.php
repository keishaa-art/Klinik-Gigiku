<?php

use App\Http\Controllers\Admin\PemeriksaanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pemeriksaan', PemeriksaanController::class);
