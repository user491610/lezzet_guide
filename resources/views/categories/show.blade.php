@extends('layouts.header')

<!-- @section('title', $category->name) -->

@section('content')

<h2 class="mb-4">{{ $category->name }}</h2>

<div class="row">
    @foreach($category->foods as $food)
    <div class="col-md-3 mb-4">
        <div class="card shadow">
            <div class="card-body text-center">
                <h6>{{ $food->name }}</h6>
                <p class="text-muted">${{ $food->price }}</p>

                <small class="text-muted">
                    {{ $food->restaurant->name }}
                </small>
            </div>
        </div>
    </div>
    <!-- @empty -->
        <p>No foods in this category</p>
    @endforeach
</div>

@endsection