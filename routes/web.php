<?php

use App\Http\Controllers\BlogC;
use App\Http\Controllers\ProfileC;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('blog.index');
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

Route::view('master', 'template/master');

//route untuk mahasiswa
Route::get('data-mahasiswa', [MahasiswaC::class, 'index']);
Route::get('add-mahasiswa', [MahasiswaC::class, 'create']);

//route untuk Blog
Route::get('Blog', [BlogC::class, 'index']);
Route::get('blog/create', ['BlogC@create'])->name('blog.create');
Route::post('blog/store', ['BlogC@store'])->name('blog.store');