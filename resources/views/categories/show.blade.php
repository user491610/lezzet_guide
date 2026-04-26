@extends('layouts.header')

@section('title', $category->name . ' - Categories')

@section('main-content')

<div class="container mt-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/categories" class="text-decoration-none text-muted">Categories</a></li>
            <li class="breadcrumb-item active fw-bold text-warning" 

aria-current="page">{{ $category->name }}</li>
        </ol>
    </nav>

    <div class="position-relative rounded-5 overflow-hidden mb-5 shadow-lg" style="height: 250px;">
        @php
            $catImg = 'images/' . strtolower($category->name) . '.jpg';
            if (!file_exists(public_path($catImg))) {

                $catImg = 'images/default.jpg';
            }
        @endphp
        
        <img src="{{ asset($catImg) }}" class="w-100 h-100" style="object-fit: cover;" alt="{{ $category->name }}">
        
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center bg-dark bg-opacity-50">
            <div class="container ps-5">

                <h1 class="text-white display-3 fw-bold text-uppercase m-0" style="letter-spacing: 3px;">
                    {{ $category->name }}
                </h1>
                <p class="text-light fs-5 mt-2">Discover the best {{ strtolower($category->name) }} in town!</p>
            </div>
        </div>
    </div>

    <div class="row">
        @forelse($category->foods as $food)

            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow-sm overflow-hidden" style="border-radius: 20px; transition: 0.3s;">
                    <div class="position-relative">
                        <img src="{{ asset($catImg) }}" class="card-img-top" height="180" style="object-fit: cover;">
                        <div class="position-absolute bottom-0 end-0 m-2">
                            <span 

class="badge bg-warning text-dark rounded-pill px-3 py-2 fw-bold shadow">
                                {{ $food->price }} TMT
                            </span>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <h6 class="fw-bold mb-1">{{ $food->name }}</h6>
                        <p class="text-muted small mb-3">
                            <i class="bi bi-

shop"></i> {{ $food->restaurant->name }}
                        </p>
                        <a href="/foods/{{ $food->id }}" class="btn btn-outline-dark btn-sm w-100 rounded-pill">View Details</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center py-5">
                <h3 class="text-muted">Bu kategoriýada entek hiç hili nahar ýok. 🍲</h3>

                <a href="/categories" class="btn btn-warning mt-3 rounded-pill px-4">Back to Categories</a>
            </div>
        @endforelse
    </div>
</div>

@endsection

<style>
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;

    }
</style>
