@extends('layouts.header')

@section('main-content')
<div class="container mt-4">
    <div class="p-5 mb-4 bg-dark text-white rounded-4 shadow">
        <h1 class="display-5 fw-bold text-warning">{{ $restaurant->name }}</h1>
        <p class="col-md-8 fs-5"><i class="bi bi-geo-alt"></i> {{ $restaurant->address }}</p>
        <p class="fs-6 text-warning"><i class="bi bi-telephone"></i> +993 {{  $restaurant->phone_number }}</p>
    </div>

    <h3 class="fw-bold mb-3">Menu from this Restaurant</h3>
    <div class="row">
        @foreach($restaurant->foods as $food)
            <div class="col-md-3 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="https://loremflickr.com/300/200/food?lock={{ $food->id }}" class="card-img p-2" style="border-radius: 15px;">
                    <div class="card-body pt-0">
                        <h6 class="fw-bold">{{ $food->name }}</h6>
                        <span class="text-success fw-bold">{{ $food->price }} TMT</span>
                        <a href="/foods/{{ $food->id}}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
