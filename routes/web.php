<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingsController;
use App\Http\Controllers\HomeController;

Route::get('/', [GreetingsController::class, 'welcome']);

Route::get('/hello/{name}/{npm}', [GreetingsController::class, 'greet']);

Route::get('/home', [HomeController::class, 'index']);
Route::get('/profil', [HomeController::class, 'profil']);
Route::get('/pendidikan', [HomeController::class, 'pendidikan']);
Route::get('/keahlian', [HomeController::class, 'keahlian']);