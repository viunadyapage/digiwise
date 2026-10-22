<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontakController;

Route::get('/', function () {
    return view('welcome');
})->name('beranda');

Route::view('/modul', 'modul')->name('modul');

Route::view('/modul/baca', 'pembaca-pdf')
    ->name('modul.baca');

Route::view('/video', 'video')->name('video');

Route::view('/faq', 'faq')->name('faq');

Route::view('/galeri', 'galeri')->name('galeri');

Route::view('/kontak', 'kontak')->name('kontak');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::post('/kontak', [KontakController::class, 'kirim'])
    ->name('kontak.kirim');

Route::view('/video', 'pages.video')->name('video');