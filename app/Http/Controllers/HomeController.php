<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Home";

        return view('home', compact('title'));
    }

    public function profil()
    {
        $title = "Profil";

        $nama = "Rosdiana Padang";
        $npm = "238160020";

        return view('profil', compact('title', 'nama', 'npm'));
    }

    public function pendidikan()
{
    $title = "Pendidikan";

    $kampus = "Universitas Medan Area";
    $prodi = "Teknik Informatika";

    return view('pendidikan', compact('title', 'kampus', 'prodi'));
}

public function keahlian()
{
    $title = "Keahlian";

    $skill = [
        "PHP",
        "Laravel",
        "HTML",
        "CSS",
        "JavaScript",
        "MySQL"
    ];

    return view('keahlian', compact('title', 'skill'));
}
}