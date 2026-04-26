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
        <a href="/restaurants" class="btn btn-outline-primary rounded-pill btn-sm">View All</

a>
    </div>

    <div class="row">
        @foreach($restaurants as $r)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0 overflow-hidden" style="border-radius: 20px;">
                @php
                    
                    $resImg = 'images/restaurant_' . $r->id . '.jpg';
                    if (!file_exists(public_path($resImg))) {
                        $resImg = 'images/restaurant_default.jpg';
                    }
                @endphp
                
                <div class="position-relative">
                    <img src="{{ asset($resImg) }}" class="card-img-top" height="220" style="object-fit:cover;">
                    <div class="position-absolute top-0 end-0 m-3">
                        <span class="badge bg-white text-dark shadow-sm px-3 py-2 rounded-pill">
                            ⭐ {{ $r->rating }}
                        </span>
                    </div>
                </div>

                <div class="card-body">
                    <h5 class="fw-bold mb-1">{{ $r->name }}</h5>
                    <p class="text-muted small mb-3"><i class="bi bi-geo-alt"></i> {{ $r->address }}</p>

                    <a href="/restaurants/{{ $r->id }}" class="btn btn-dark w-100 rounded-pill">View Menu</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="container mt-5 bg-light p-5 rounded-5 shadow-sm">
    <h3 class="fw-bold mb-4 text-center">Browse by Category</h3>

    <div class="row justify-content-center">
        @foreach($categories as $cat)
        <div class="col-md-2 col-6 mb-3 text-center">
            <a href="/categories/show/{{ $cat->id }}" class="text-decoration-none">
                <div class="card border-0 shadow-sm py-3 category-card h-100" style="border-radius: 20px; transition: 0.3s;">
                    <div class="fs-1 mb-2">

                        @if(strtolower($cat->name) == 'pizza') 🍕 
                        @elseif(strtolower($cat->name) == 'beverages') 🥤 
                        @elseif(strtolower($cat->name) == 'burger') 🍔
                        @elseif(strtolower($cat->name) == 'dessert') 🍰
                        @else 🍲 @endif
                    </div>
                    <h6 class="text-dark fw-bold mb-0">{{ $cat->name }}</h6>

                </div>
            </a>
        </div>
        @endforeach
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
                    <p class="text-danger small mb-0"><i class="bi bi-heart-fill"></i> {{ $food->like_count }} like_count</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection


<style>
    .category-card:hover {
        background-color: #ffc107 !important;
        transform: translateY(-10px);
    }
    /* .card {
        transition: transform 0.3s ease;
    } */
    .card:hover {
        transform: scale(1.02);
    }
</style>
