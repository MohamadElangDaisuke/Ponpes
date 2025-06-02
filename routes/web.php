<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('beranda');
})->middleware(['auth', 'verified'])->name('beranda');

Route::get('/galeri', function () {
    return view('galeri');
})->middleware(['auth', 'verified'])->name('galeri');

Route::get('/kontak', function () {
    return view('kontak');
})->middleware(['auth', 'verified'])->name('kontak');

//Profil
Route::get('/profil.visi', function () {
    return view('profil.visi');
})->middleware(['auth', 'verified'])->name('profil.visi');

Route::get('/profil.sejarah', function () {
    return view('profil.sejarah');
})->middleware(['auth', 'verified'])->name('profil.sejarah');

Route::get('/profil.pengasuh', function () {
    return view('profil.pengasuh');
})->middleware(['auth', 'verified'])->name('profil.pengasuh');

Route::get('/profil.struktur', function () {
    return view('profil.struktur');
})->middleware(['auth', 'verified'])->name('profil.struktur');

//Pendidikan
Route::get('/pendidikan.program', function () {
    return view('pendidikan.program');
})->middleware(['auth', 'verified'])->name('pendidikan.program');

Route::get('/pendidikan.ekstrakurikuler', function () {
    return view('pendidikan.ekstrakurikuler');
})->middleware(['auth', 'verified'])->name('pendidikan.ekstrakurikuler');

Route::get('/pendidikan.fasilitas', function () {
    return view('pendidikan.fasilitas');
})->middleware(['auth', 'verified'])->name('pendidikan.fasilitas');

Route::get('/pendidikan.kalender', function () {
    return view('pendidikan.kalender');
})->middleware(['auth', 'verified'])->name('pendidikan.kalender');

//Pendaftaran
Route::get('/pendaftaran.informasi', function () {
    return view('pendaftaran.informasi');
})->middleware(['auth', 'verified'])->name('pendaftaran.informasi');

Route::get('/pendaftaran.formulir', function () {
    return view('pendaftaran.formulir');
})->middleware(['auth', 'verified'])->name('pendaftaran.formulir');

Route::get('/pendaftaran.pembayaran', function () {
    return view('pendaftaran.pembayaran');
})->middleware(['auth', 'verified'])->name('pendaftaran.pembayaran');

Route::get('/pendaftaran.administrasi', function () {
    return view('pendaftaran.administrasi');
})->middleware(['auth', 'verified'])->name('pendaftaran.administrasi');

//Berita
Route::get('/berita.berita', function () {
    return view('berita.berita');
})->middleware(['auth', 'verified'])->name('berita.berita');

Route::get('/berita.pengumuman', function () {
    return view('berita.pengumuman');
})->middleware(['auth', 'verified'])->name('berita.pengumuman');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
