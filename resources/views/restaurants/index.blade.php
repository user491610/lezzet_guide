@extends('layouts.header')

<!-- @section('title', 'Restaurants') -->

@section('content')

<h2 class="mb-4">Restaurants</h2>

<a href="/restaurants/create" class="btn btn-warning mb-3">+ Add</a>

<div class="row">
    @foreach($restaurants as $r)
    <div class="col-md-4 mb-4">
        <div class="card shadow">
            <div class="card-body">
                <h5>{{ $r->name }}</h5>
                <p>{{ $r->address }}</p>

                <p>⭐ {{ $r->rating }}</p>
                <p>{{ $r->phone_number }}</p>

                <a href="/restaurants/{{ $r->id }}" class="btn btn-dark w-100">
                    View Menu
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection