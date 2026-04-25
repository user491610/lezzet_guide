@extends('layouts.header')
@section('main-content')
    <div class="container">
    <h2 class="mb-4">Our Menu</h2>
    <div class="row">
        @foreach($foods as $f)
        <div class="col-md-3 mb-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="fw-bold">{{ $f->name }}</h5>
                    <p class="text-muted small">{{ $f->restaurant->name }}</p>
                    <p class="text-success fw-bold">{{ $f->price }} TMT</p>
                    <a href="/foods/{{ $f->id }}" class="btn btn-dark btn-sm w-100">Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    </div>
@endsection