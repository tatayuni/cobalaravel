
@extends ('layouts.main')

@section ('container')
<h2 class="mb-3 text-center">{{$title}}</h2>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/dokumen">
        @if (request('category'))
            <input type="hidden" name="category" value="{{request('category')}}">
        @endif
        @if (request('user'))
            <input type="hidden" name="user" value="{{request('user')}}">
        @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search" value="{{request('search')}}">
                    <button class="btn btn-dark" type="submit">Search</button>
</div>
    </form>
    </div>
</div>

@if($publikasi->count())

<div class="card mb-3">
  <img src="https://source.unsplash.com/1200x400/?data archive" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h3 class="card-title"><a href="/publikasi/{{ $publikasi[0]->slug}}" class="text-decoration-none text-dark">{{$publikasi[0]->title}}</a></h3>
    <p>
    <small class="text-muted">
        By. <a href="/dokumen?user={{ $publikasi[0]->user->username }}" class="text-decoration-none"> {{ $publikasi[0]->user->name }}   </a> in <a href="/dokumen?category={{$publikasi[0]->category->slug }}" class="text-decoration-none">{{ $publikasi[0]->category->name}}</a> {{ $publikasi[0]->created_at->diffForHumans() }}
    </small>
    </p>
    <p class="card-text">{{$publikasi[0]->excerpt}}</p>

    <a href="/publikasi/{{ $publikasi[0]->slug }}"  class="text-decoration-none btn btn-primary">Read more...</a>
  </div>
  </div>

    <div class="container">
        <div class="row">
            @foreach ($publikasi->skip(1) as $publikasi)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2 " style="background-color:rgba(0,0,0,0.7)"><a href="/dokumen?category={{$publikasi->category->slug }}" class="text-white text-decoration-none">{{$publikasi->category->name}}</a></div>
                    <img src="https://source.unsplash.com/500x400/?data archive" class="card-img-top" alt="...">
                    <div class="card-body">
                <h5 class="card-title">{{$publikasi->title}}</h5>
                     <p>
                        <small class="text-muted">
                            By. <a href="/dokumen?user={{ $publikasi->user->username }}" class="text-decoration-none"> {{ $publikasi->user->name }}   </a>  {{ $publikasi->created_at->diffForHumans() }}
                        </small>
                    </p>
                <p class="card-text">{{$publikasi->excerpt}}</p>
                <a href="/publikasi/{{ $publikasi->slug }}" class="btn btn-primary">Read more</a>
                    </div>
                 </div>
            </div>
        @endforeach
    </div>

    @else
    <p class="text-center fs-4">No Documents Found</p>
    @endif

    {{ $publikasi->skip(1)->links() }} 

@endsection