@extends('layouts.header')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-warning text-dark fw-bold">
                    Food Details: {{ $food->name }}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>{{ $food->name }}</h3>
                            <p class="badge bg-info text-dark">{{ $food->category->name }}</p>
                            <hr>
                            <p><strong>Code:</strong> {{ $food->code }}</p>
                            <p><strong>Price:</strong> <span class="text-success h4">{{ $food->price }} TMT</span></p>
                            <p><strong>Likes:</strong> ❤️ {{ $food->like_count }}</p>
                        </div>
                        <div class="col-md-6 border-start">
                            <h5>Restaurant Information</h5>
                            <p><strong>Name:</strong> {{ $food->restaurant->name }}</p>
                            <p><strong>Address:</strong> {{ $food->restaurant->address }}</p>
                            <p><strong>Phone:</strong> {{ $food->restaurant->phone_number }}</p>
                            <p><strong>Rating:</strong> ⭐ {{ $food->restaurant->rating }}</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="/foods" class="btn btn-secondary">Back to Menu</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection