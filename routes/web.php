<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');

});
Route::get('/reservasi', function () {
    return view('reservasi');
});
Route::get('/1', function () {
    return view('cabang');
});
