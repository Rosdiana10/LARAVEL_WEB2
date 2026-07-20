<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GreetingsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\AuthController;

Route::get('/', [GreetingsController::class, 'welcome']);

Route::get('/nilai/{mahasiswaId}', [NilaiController::class, 'showNilaiMahasiswa'])
    ->name('tampilnilai');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Praktikum 2 Modul 6
Route::get('/login-manual', [AuthController::class, 'login']);
Route::post('/cek-login', [AuthController::class, 'cekLogin']);
Route::get('/dashboard', [AuthController::class, 'dashboard']);
Route::get('/logout-manual', [AuthController::class, 'logout']);

// Modul 7
Route::get('/halaman-usia', function () {
    return view('halaman-usia');
})->middleware(['auth', 'age']);

use App\Http\Controllers\FileUploadController;

Route::get('/upload', [FileUploadController::class, 'showUploadForm'])->name('upload.form');
Route::post('/upload', [FileUploadController::class, 'storeFile'])->name('upload.store');
Route::get('/files', [FileUploadController::class, 'listFiles'])->name('files.list');
Route::delete('/files/{filename}', [FileUploadController::class, 'deleteFile'])->name('files.delete');