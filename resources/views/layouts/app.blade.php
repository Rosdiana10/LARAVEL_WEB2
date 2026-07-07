<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <style>
        body{
            margin:0;
            font-family:Arial, Helvetica, sans-serif;
            background:#f4f4f4;
            color:#222;
        }

        header{
            background:#0d6efd;
            color:white;
            text-align:center;
            padding:20px;
        }

        nav{
            background:#343a40;
            padding:10px;
            text-align:center;
        }

        nav a{
            color:white;
            text-decoration:none;
            margin:0 15px;
            font-weight:bold;
        }

        .container{
            width:80%;
            margin:30px auto;
            background:white;
            color:black;
            padding:20px;
            border-radius:8px;
            box-shadow:0 0 10px rgba(0,0,0,.2);
        }

        footer{
            background:#0d6efd;
            color:white;
            text-align:center;
            padding:15px;
        }
    </style>
</head>
<body>

<header>
    <h1>Praktikum Laravel Modul 3</h1>
</header>

<nav>
    <a href="/home">Home</a>
    <a href="/profil">Profil</a>
    <a href="/pendidikan">Pendidikan</a>
    <a href="/keahlian">Keahlian</a>
</nav>

<div class="container">
    @yield('content')
</div>

<footer>
    Copyright © 2026
</footer>

</body>
</html>