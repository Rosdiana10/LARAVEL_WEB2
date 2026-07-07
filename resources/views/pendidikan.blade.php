@extends('layouts.app')

@section('content')

<h2>Pendidikan</h2>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <td><b>Kampus</b></td>
        <td>{{ $kampus }}</td>
    </tr>

    <tr>
        <td><b>Program Studi</b></td>
        <td>{{ $prodi }}</td>
    </tr>
</table>

@endsection