<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('beranda');

Route::view('/modul', 'modul')->name('modul');

Route::view('/modul/baca', 'pembaca-pdf')
    ->name('modul.baca');

Route::view('/video', 'video')->name('video');

Route::view('/faq', 'faq')->name('faq');

Route::view('/galeri', 'galeri')->name('galeri');