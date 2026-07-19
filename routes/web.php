<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NilaiController;

Route::get('/', [GreetingsController::class, 'welcome']);


Route::get('/nilai/{mahasiswaId}', [NilaiController::class, 'showNilaiMahasiswa'])
    ->name('tampilnilai');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
use App\Http\Controllers\AuthController;

// Praktikum 2 Modul 6
Route::get('/login-manual', [AuthController::class, 'login']);
Route::post('/cek-login', [AuthController::class, 'cekLogin']);
Route::get('/dashboard', [AuthController::class, 'dashboard']);
Route::get('/logout-manual', [AuthController::class, 'logout']);
