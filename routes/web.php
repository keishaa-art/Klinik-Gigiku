<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');

});
Route::get('/reservasi', function () {
    return view('cabang');
});
Route::get('/1', function () {
    return view('reservasi');
});
Route::get('/2', function () {
    return view('jadwal');
});
Route::get('/3', function () {
    return view('keluhan');
});