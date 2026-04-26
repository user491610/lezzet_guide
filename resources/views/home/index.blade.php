@extends('layouts.header')

@section('title', 'Home - Lezzet Guide')

@section('main-content')

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-dark text-white rounded-5 shadow-lg" 
     style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ 

asset('images/hero_bg.jpg') }}') no-repeat center center; background-size: cover;">
    <div class="col-md-6 p-lg-5 mx-auto my-5">
        <h1 class="display-4 fw-bold">Lezzet Guide </h1>
        <p class="lead fw-normal text-light">Your favourite restaurants and meals are in here</p>
        <a class="btn btn-warning btn-lg rounded-pill fw-bold px-5 py-3 shadow" href="/restaurants">Explore Now</a>
    </div>

</div>

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-end mb-4">
        <div>
            <h2 class="fw-bold m-0">Best Restaurants</h2>
            <p class="text-muted mb-0">High-rated places you must visit</p>
        </div>
        <a href="/restaurants" class="btn btn-outline-primary rounded-pill btn-sm">View All</a>
    </div>

<div class="container mt-5">
    

    </div>

    <div class="row">
        @foreach($restaurants as $r)
        <div class="col-md-3 mb-4">
            <a href="/restaurants/{{ $r->id }}" class="text-decoration-none text-dark">
                <div class="card h-100 border-0 shadow-sm overflow-hidden restaurant-hover-card" style="border-radius: 20px;">
                    @php
                        // Restoranyň ID-sine görä surat (restaurant_1.jpg we s.m.)

                        $resImg = 'images/restaurant_' . $r->id . '.jpg';
                        
                        if (!file_exists(public_path($resImg))) {
                            $resImg = 'images/restaurant_default.jpg';
                        }
                    @endphp

                    <div class="position-relative">
                        <img src="{{ asset($resImg) }}" 
                             class="card-img-top" 
                             style="height: 200px; object-fit: cover;" 
                             alt="{{ $r->name }}">
                        
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-white text-dark shadow-sm px-2 py-1 rounded-pill">
                                ⭐ {{ $r->rating }}
                            </span>

                        </div>
                    </div>

                    <div class="card-body p-3">
                        <h5 class="fw-bold mb-1">{{ $r->name }}</h5>
                        <p class="text-muted small mb-0">
                            <i class="bi bi-geo-alt-fill text-danger"></i> {{ $r->address }}
                        </p>
                    </div>
                </div>
            </a>

        </div>
        @endforeach
    </div>
</div>

<div class="container mt-5 bg-light p-5 rounded-5 shadow-sm">
    

    <div class="container mt-5">
    <h3 class="fw-bold mb-4">Browse by Category</h3>
    <div class="row">
        @foreach($categories as $cat)
        <div class="col-md-3 col-6 mb-3">
            <a href="/foods?category_id={{ $cat->id }}" class="text-decoration-none">
                <div class="card border-0 shadow-sm category-card h-100 overflow-hidden" style="border-radius: 15px;">
                    
                    @php
                        // Kategoriyn adyna gora surat (pizza.jpg, burger.jpg we s.m.)
                        $catImg = 'images/' . strtolower($cat->name) . '.jpg';
                        
                        if (!file_exists(public_path($catImg))) {
                            $catImg = 'images/default.jpg'; // Surat tapylmasa
                        }
                    @endphp

                    <img src="{{ asset($catImg) }}" 
                         class="card-img-top" 
                         style="height: 100px; object-fit: cover;" 
                         alt="{{ $cat->name }}">

                    <div class="card-body p-2 text-center">
                        <h6 class="text-dark fw-bold mb-0 small">{{ $cat->name }}</h6>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

</div>

<div class="container mt-5 mb-5">
    <h3 class="fw-bold mb-4">Most Liked Foods</h3>
    <div class="row">
        @foreach($foods as $food)
        <div class="col-md-3 mb-4">
            <div class="card h-100 border-0 shadow-sm overflow-hidden" style="border-radius: 20px;">
                @php
                    // Kategoriýa adyna görä surat (pizza.jpg, beverages.jpg we s.m.)
                    $foodImg = 'images/' . strtolower($food->category->name) . '.jpg';
                    if (!file_exists(public_path($foodImg))) {
                        $foodImg = 'images/default.jpg';
                    }
                @endphp


                <div class="position-relative">
                    <img src="{{ asset($foodImg) }}" class="card-img-top" height="180" style="object-fit:cover;">
                    <div class="position-absolute bottom-0 start-0 m-2">
                        <span class="badge bg-warning text-dark shadow fw-bold">{{ $food->price }} TMT</span>
                    </div>
                </div>

                <div class="card-body text-center">
                    <h6 class="fw-bold mb-1">{{ $food->name }}</h6>
                    <p class="text-danger small mb-0"><i class="bi bi-heart-fill"></i> {{ $food->like_count }} likes</p>
                    <a href="/foods/{{ $food->id }}" class="btn btn-warning w-100 fw-bold rounded-pill shadow-sm">
                    Details
                </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection


