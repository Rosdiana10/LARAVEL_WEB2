<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingsController extends Controller
{
    /**
     * Menampilkan pesan selamat datang.
     */
    public function welcome()
    {
        return "Selamat datang di aplikasi Laravel!";
    }

    /**
     * Menampilkan salam berdasarkan nama dan NPM.
     */
    public function greet($name, $npm)
    {
        return "Halo, " . $name . " " . $npm . "!";
    }
}