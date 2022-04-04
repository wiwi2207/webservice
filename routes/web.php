<?php

use App\Http\Controllers\ProfileC;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Welcome');
})->name('utama');

Route::get('/about', function () {
    return view('about');
})->name('tentang-saya');

Route::get('/profile', [ProfileC::class,'index']);


Route::get('/nama', function () {
    return 'Wiwi Susanti';
});

Route::get('/dari-view', function () {
    return view('Home');
});