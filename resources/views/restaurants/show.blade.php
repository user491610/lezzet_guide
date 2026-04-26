@extends('layouts.header')

@section('title', $restaurant->name)

@section('main-content')

<div class="container mt-4">
    <div class="card border-0 shadow-sm overflow-hidden mb-5" style="border-radius: 30px;">
        <div class="row g-0 align-items-center">
            <div class="col-md-6">
                @php
                    // Restoranyň öz suraty (restaurant_1.jpg we s.m.)
                    $resImg = 'images/restaurant_' . $restaurant->id . '.jpg';
                    if (!file_exists(public_path($resImg))) {
                        $resImg = 'images/restaurant_default.jpg';
                    }
                @endphp
                <img src="{{ asset($resImg) }}" class="img-fluid w-100" style="height: 350px; object-fit: cover;" alt="{{ $restaurant->name }}">
            </div>
            <div class="col-md-6 p-5">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <h1 class="fw-bold display-5">{{ $restaurant->name }}</h1>
                    <span class="badge bg-warning text-dark fs-5 rounded-pill px-3 py-2 shadow-sm">
                        ⭐ {{ $restaurant->rating }}
                    </span>

                </div>
                <p class="text-muted fs-5"><i class="bi bi-geo-alt-fill text-danger"></i> {{ $restaurant->address }}</p>
                <p class="text-muted fs-6"><i class="bi bi-telephone-fill text-success"></i> +993 {{ $restaurant->phone_number }}</p>
                <hr>
                <p class="mb-0 text-secondary">Hoş geldiňiz! Bizde iň lezzetli tagamlary we ýokary hilli hyzmaty tapyp bilersiňiz.</p>
            </div>

        </div>
    </div>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold m-0">Full Menu</h2>
        <div class="dropdown">
            <button class="btn btn-outline-dark dropdown-toggle rounded-pill" type="button" data-bs-toggle="dropdown">
                Sort Food
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?sort=expensive">Price: High to Low</a></li>
                <li><a class="dropdown-item" href="?sort=cheap">Price: Low to High</a></li>
            </ul>
        </div>
    </div>

    <div class="row">
        @forelse($foods as $food)
        <div class="col-md-3 mb-4">
            <div class="card h-100 border-0 shadow-sm overflow-hidden" style="border-radius: 20px;">
                @php
                    // Kategoriýa adyna görä surat (beverages.jpg, pizza.jpg...)
                    $foodImg = 'images/' . strtolower($food->category->name) . '.jpg';
                    if (!file_exists(public_path($foodImg))) {
                        $foodImg = 'images/default.jpg';
                    }

                @endphp
                
                <div class="position-relative">
                    <img src="{{ asset($foodImg) }}" class="card-img-top" height="180" style="object-fit: cover;">
                    <div class="position-absolute bottom-0 start-0 m-2">
                        <span class="badge bg-dark rounded-pill shadow px-3">{{ $food->price }} TMT</span>
                    </div>
                </div>


                <div class="card-body">
                    <h6 class="fw-bold mb-1">{{ $food->name }}</h6>
                    <p class="text-muted small mb-3">Category: {{ $food->category->name }}</p>
                    <a href="/foods/{{ $food->id }}" class="btn btn-outline-warning btn-sm w-100 rounded-pill fw-bold">Order Now</a>
                </div>
            </div>
        </div>
        @empty

        <div class="col-12 text-center py-5">
            <h4 class="text-muted">Bu restoranda heniz nahar goşulmandyr.</h4>
        </div>
        @endforelse
    </div>
</div>

@endsection
