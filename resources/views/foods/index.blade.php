@extends('layouts.header')
@section('main-content')
    <div class="container">
    <h2 class="mb-4">Our Menu</h2>
    <div class="row">
    @foreach($foods as $food)
    <div class="col-md-3 mb-4">
        <div class="card h-100 shadow-sm border-0 overflow-hidden" style="border-radius: 15px;">
            
            @php
                 $catName = strtolower($food->category->name);
                
              
                $imagePath = 'images/' . $catName . '.jpg';

              
                if (!file_exists(public_path($imagePath))) {
                    $imagePath = 'images/default.jpg';
                }

            @endphp

            <div class="position-relative">
                <img src="{{ asset($imagePath) }}" 
                     class="card-img-top" 
                     style="height: 180px; object-fit: cover;" 
                     alt="{{ $food->name }}">

                <div class="position-absolute top-0 end-0 m-2">
                    <span class="badge bg-dark bg-opacity-75 rounded-pill px-3 py-2" style="backdrop-filter: blur(5px);">
                        {{ $food->category->name }}
                    </span>
                </div>
            </div>

            <div class="card-body">
                <h6 class="fw-bold mb-1">{{ $food->name }}</h6>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="text-success fw-bold">{{ $food->price }} TMT</span>
                    <span class="text-danger small"><i class="bi bi-heart-fill"></i> {{ $food->like_count }}</span>
                </div>
                <p class="text-muted small mt-2 mb-0">
                    <i class="bi bi-shop"></i> {{ $food->restaurant->name }}
                </p>
            </div>

            <div class="card-footer bg-white border-0 pb-3">

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