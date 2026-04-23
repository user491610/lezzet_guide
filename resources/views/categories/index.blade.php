@extends('layouts.app')

<!-- @section('title', 'Categories') -->

@section('content')

<h2 class="mb-4">Categories</h2>

<div class="row">
    @foreach($categories as $category)
    <div class="col-md-3 mb-4">
        <div class="card shadow text-center">
            <div class="card-body">
                <h5>{{ $category->name }}</h5>

                <a href="{{ url('/categories/' . $category->id) }}" 
                   class="btn btn-dark w-100 mt-2">
                   View Foods
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection