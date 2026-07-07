@extends('layouts.app')

@section('content')

<h2>Keahlian</h2>

<ul>
    @foreach($skill as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>

@endsection