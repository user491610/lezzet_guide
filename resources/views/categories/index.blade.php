@extends('layouts.header')

<!-- @section('title', 'All Categories') -->

@section('main-content')

<div class="container mt-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Explore by Category </h2>
        <p class="text-muted">Choose what you're craving today</p>
    </div>

    <div class="row">
        @foreach($categories as $cat)
        <div class="col-md-4 col-sm-6 mb-4">
            <a href="/foods?category_id={{ $cat->id }}" class="text-decoration-none">
                <div class="card border-0 shadow-sm category-main-card h-100 overflow-hidden" style="border-radius: 20px;">
                        @php
                        // Kategoriýa adyna görä surat (beverages.jpg, pizza.jpg...)
                        $catImg = 'images/' . strtolower($cat->name) . '.jpg';
                        
                        if (!file_exists(public_path($catImg))) {
                            $catImg = 'images/default.jpg';
                        }
                    @endphp

                    <div class="position-relative overflow-hidden" style="height: 200px;">
                        <img src="{{ asset($catImg) }}" 
                             class="card-img-top h-100 w-100" 
                             style="object-fit: cover; transition: 0.5s;" 
                             alt="{{ $cat->name }}">
                        
                        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" 
                             style="background: rgba(0,0,0,0.3);">
                            <h3 class="text-white fw-bold text-uppercase m-0" style="letter-spacing: 2px;">
                                {{ $cat->name }}
                            </h3>
                        </div>
                    </div>

                    <div class="card-body text-center bg-white">
                        <span class="btn btn-outline-dark btn-sm rounded-pill px-4">Browse Menu</span>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection

<style>
    
</style>
