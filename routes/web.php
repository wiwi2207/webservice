<?php

use App\Http\Controllers\BlogC;
use App\Http\Controllers\KaryawanC;
use App\Http\Controllers\ProfileC;
use App\Models\Karyawan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
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
Route::post('simpan-mahasiswa', [MahasiswaC::class, 'store']);
Route::delete('delete-mahasiswa/{id}', [MahasiswaC::class, 'destroy'])->name('delete.mahasiswa');

//route untuk Blog
Route::get('data-blog', [BlogC::class, 'index']);
Route::get('add-blog', [BlogC::class, 'create']);
Route::post('simpan-blog', [BlogC::class, 'store']);
Route::get('edit-blog', [BlogC::class, 'edit'])->name('edit.blog');
Route::delete('delete-blog/{id}', [BlogC::class, 'destroy'])->name('delete.blog');

Route::group(['middleware=>auth'], function() {
//Route untuk Karyawan
Route::get('data-karyawan', [KaryawanC::class, 'index'])->middleware('auth');
Route::get('add-karyawan', [KaryawanC::class, 'create'])->name('create.karyawan')->middleware('auth');
Route::post('simpan-karyawan', [KaryawanC::class, 'store']);
Route::delete('delete-karyawan/{id}', [KaryawanC::class, 'destroy'])->name('delete.karyawan');
Route::get('edit-karyawan/{id}', [KaryawanC::class, 'edit'])->name('edit.karyawan');
Route::patch('update-karyawan/{karyawan}', [KaryawanC::class, 'update'])->name('update.karyawan');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
