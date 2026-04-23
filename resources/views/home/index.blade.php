
@extends('layouts.header')

    @section('main-content')
    <!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MenuHub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .hero {
            height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                        url('https://images.unsplash.com/photo-1504674900247-0877df9cc836');
            background-size: cover;
            background-position: center;
            color: white;
        }

        .hero h1 {
            font-size: 60px;
            font-weight: bold;
        }

        .hero p {
            font-size: 20px;
            margin-top: 15px;
        }

        .section-title {
            margin: 60px 0 30px;
            text-align: center;
        }

        .card:hover {
            transform: scale(1.05);
            transition: 0.3s;
        }
    </style>
</head>
<body>


<section class="hero">
    <div>
        <h1>Welcome to Lezzet Guide</h1>
        <p>Discover restaurants & explore delicious meals</p>
        <!-- <a href="#" class="btn btn-warning mt-3 px-4 py-2">Explore Now</a> -->
    </div>
</section>

<!-- Restaurants -->
<div class="container">
    <h2 class="section-title">Popular Restaurants</h2>

    <div class="row">
        @for($i = 0; $i < 3; $i++)
        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <!-- <img src="https://images.unsplash.com/photo-1555992336-03a23c7b20ee" class="card-img-top"> -->
                <div class="card-body">
                    <h5 class="card-title">Restaurant Name</h5>
                    <p class="card-text">Best foods & great atmosphere</p>
                    <a href="#" class="btn btn-dark w-100">View Menu</a>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>

<!-- Foods -->
<div class="container">
    <h2 class="section-title">Popular Foods 🍔</h2>

    <div class="row">
        @for($i = 0; $i < 4; $i++)
        <div class="col-md-3 mb-4">
            <div class="card shadow">
                <!-- <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd" class="card-img-top"> -->
                <div class="card-body text-center">
                    <h6 class="card-title">Burger</h6>
                    <p class="text-muted">$10</p>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>

<!--  Footer -->
<footer class="bg-dark text-white text-center p-3 mt-5">
    <p class="mb-0">© 2026 MenuHub - All rights reserved</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

@endsection()
