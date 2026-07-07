@extends('layouts.app')

@section('content')

<h2>Profil Mahasiswa</h2>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <td><b>Nama</b></td>
        <td>{{ $nama }}</td>
    </tr>

    <tr>
        <td><b>NPM</b></td>
        <td>{{ $npm }}</td>
    </tr>
</table>

@endsection