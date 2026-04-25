@extends('layouts.header')

@section('main-content')
<div class="container mt-4">
    <h2 class="fw-bold mb-4">Our Restaurants</h2>
    <div class="row">
        @foreach($restaurants as $r)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <img src="https://loremflickr.com/400/250/restaurant?lock={{ $r->id }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body">

                        <h5 class="card-title fw-bold text-primary">{{ $r->name }}</h5>
                        <p class="text-muted mb-1"><i class="bi bi-geo-alt"></i> {{ $r->address }}</p>
                        <p class="text-warning small mb-3">
                            <i class="bi bi-star-fill"></i> {{ $r->rating }}/5
                        </p>
                        <a href="/restaurants/{{$r->id}}" class="btn btn-dark w-100 rounded-pill">View Menu</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
