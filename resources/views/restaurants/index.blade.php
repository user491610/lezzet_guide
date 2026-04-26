
@extends('layouts.header')

@section('title', 'All Restaurants')

@section('main-content')

<div class="container mt-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold display-5">Explore Restaurants 🍽️</h1>
        <p class="text-muted">Find the best places to eat around you</p>
    </div>

    <div class="row">
        @foreach($restaurants as $r)
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm restaurant-card" style="border-radius: 25px; transition: 0.3s; overflow: hidden;">
                
                @php
                    // Restoranyň ID-sine görä surat (restaurant_1.jpg, restaurant_2.jpg...)
                    $resImg = 'images/restaurant_' . $r->id . '.jpg';

                    
                    // Eger hakyky surat ýok bolsa, default suraty ulanarys
                    if (!file_exists(public_path($resImg))) {
                        $resImg = 'images/restaurant_default.jpg';
                    }
                @endphp

                <div class="position-relative">
                    <img src="{{ asset($resImg) }}" 
                         class="card-img-top" 
                         style="height: 250px; object-fit: cover;" 
                         alt="{{ $r->name }}">
                    
                    <div class="position-absolute top-0 end-0 m-3">
                        <span class="badge bg-white text-dark shadow-sm px-3 py-2 rounded-pill fw-bold">
                            ⭐ {{ $r->rating }}
                        </span>
                    </div>
                </div>


                <div class="card-body p-4">
                    <h4 class="fw-bold mb-2">{{ $r->name }}</h4>
                    <p class="text-muted mb-3 small">
                        <i class="bi bi-geo-alt-fill text-danger"></i> {{ $r->address }}
                    </p>
                    
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <span class="text-success small fw-bold">
                            <i class="bi bi-clock-history"></i> Open Now
                        </span>
                        <a href="/restaurants/{{ $r->id }}" class="btn btn-warning rounded-pill px-4 fw-bold shadow-sm">
                            View Menu
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection


