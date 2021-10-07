
@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h2 class="mb-3">{{ $publikasi["title"]}}</h2>
   
        <p>By. <a href="/author/{{ $publikasi->user->username }}" class="text-decoration-none"> {{ $publikasi->user->name }}</a> in <a href="/dokumen?category={{$publikasi->category->slug }}"class="text-decoration-none">{{ $publikasi->category->name}}</a></p>

        <img src="https://source.unsplash.com/1200x400/?data archive" class="card-img-top" alt="" class="img-fluid">
        
        <article class="my-3 fs-5">
        {!! $publikasi->body !!}
        </article>

        <a href="/dokumen" class="d-block">Kembali</a>

        </div>
    </div>
</div>


@endsection