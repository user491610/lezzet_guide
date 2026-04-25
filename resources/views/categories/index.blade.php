@extends('layouts.header')

@section('title', 'Categories')

@section('main-content')
<body class="">
    
    <div class="container mt-5">
        <h2 class="text-center mb-4">Categories</h2>
    
    <div class="row">
        @forelse($categories as $cat)
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold text-uppercase">{{ $cat->name }}</h5>
                        <p class="text-muted small">Delicious foods waiting for you.</p>
                        <a href="/categories/{{ $cat->id }}" class="btn btn-warning btn-sm w-100">
                            See Foods
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p class="alert alert-info">No categories found in database.</p>
            </div>
        @endforelse
    </div>
</div>
</body>
@endsection