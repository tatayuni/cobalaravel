@extends('layouts.main')


@section ('container')
    <h1>Halaman Profil</h1>
    <h3>{{ $header }}</h3>
    <p>{{ $keterangan }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumnail rounded-circle"></img>

    @endsection