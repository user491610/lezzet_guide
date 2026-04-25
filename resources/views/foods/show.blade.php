@extends('layouts.header')

@section('title', 'Details: ' . $food->name)

@section('main-content')
<div class="container mt-5">
    <div class="mb-4">
        <a href="{{ url('/foods') }}" class="btn btn-outline-dark btn-sm rounded-pill">
            <i class="bi bi-arrow-left"></i> Back to Menu
        </a>
    </div>

    <div class="row">
        <div class="col-md-7">
            <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <span class="badge bg-primary mb-2 text-uppercase">{{ $food->category->name }}</span>
                            <h1 class="fw-bold display-5 text-dark">{{ $food->name }}</h1>
                        </div>
                        <div class="text-end">
                            <span class="h2 fw-bold text-success">{{ number_format($food->price, 2) }} TMT</span>
                            <p class="text-muted small">Code: {{ $food->code }}</p>
                        </div>
                    </div>

                    <hr class="my-4">
                        <div class="">
                            <img src="" alt="">
                        </div>
                    <div class="row text-center mt-4">
                        <div class="col-4">
                            <div class="p-3 bg-light rounded-3">
                                <i class="bi bi-heart-fill text-danger fs-3"></i>
                                <p class="mb-0 mt-2 fw-bold">{{ $food->like_count }} Likes</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-3 bg-light rounded-3">
                                <i class="bi bi-clock-history fs-3 text-info"></i>
                                <p class="mb-0 mt-2 fw-bold">Freshly Made</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-3 bg-light rounded-3">
                                <i class="bi bi-shield-check fs-3 text-success"></i>
                                <p class="mb-0 mt-2 fw-bold">Quality Assured</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <h5 class="fw-bold">Description</h5>
                        <p class="text-muted leading-relaxed">
                            Enjoy our delicious {{ strtolower($food->name) }}, prepared with the finest ingredients 
                            from <strong>{{ $food->restaurant->name }}</strong>. This dish is part of our 
                            {{ strtolower($food->category->name) }} collection, ensuring authentic taste and quality.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card shadow-sm border-0 rounded-4 bg-dark text-white p-2">
                <div class="card-body">
                    <h4 class="fw-bold mb-4 text-warning">Sold by Restaurant</h4>
                    
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0">
                            <div class="bg-warning rounded-circle d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                                <i class="bi bi-shop fs-2 text-dark"></i>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h5 class="mb-0 fw-bold">{{ $food->restaurant->name }}</h5>
                            <span class="text-warning">
                                @for($i = 0; $i < 5; $i++)
                                    <i class="bi bi-star{{ $i < $food->restaurant->rating ? '-fill' : '' }}"></i>
                                @endfor
                                <small class="text-white ms-1">({{ $food->restaurant->rating }}/5)</small>
                            </span>
                        </div>
                    </div>

                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex align-items-start">
                            <i class="bi bi-geo-alt-fill text-warning me-3 fs-5"></i>
                            <span>{{ $food->restaurant->address }}</span>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="bi bi-telephone-fill text-warning me-3 fs-5"></i>
                            <span>+993 {{ $food->restaurant->phone_number }}</span>
                        </li>
                    </ul>

                    <hr class="bg-secondary">

                    <div class="d-grid mt-4">
                        <button class="btn btn-warning fw-bold py-2 rounded-pill">
                            <i class="bi bi-cart-plus-fill me-2"></i> Order Now
                        </button>
                    </div>
                </div>
            </div>

            <div class="alert alert-info mt-4 border-0 rounded-4 shadow-sm">
                <i class="bi bi-info-circle-fill me-2"></i>
                Prices may vary depending on delivery distance.
            </div>
        </div>
    </div>
</div>
@endsection