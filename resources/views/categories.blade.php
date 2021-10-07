
@extends ('layouts.main')

@section ('container')
<h2 class="mb-5">Post Categories</h2>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4">
                <a href="/dokumen?category={{$category->slug }}">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x500/?data arcive" class="card-img" alt="...">
                    <div class="card-img-overlay d-flex align-items-center">
                        <h5 class="card-title text-center flex-fill p-4 fs-3 p-0" style="background-color:rgba(0,0,0,0.7)">{{$category->name}}</h5>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

@endsection