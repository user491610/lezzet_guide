

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lezzet guide</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.css" rel="stylesheet">

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

       
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm py-3">
    <div class="container">
        <a class="navbar-brand fw-bold fs-4 text-warning" href="{{route('home')}}">
            <i class="bi "></i> Lezzet Guide
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto gap-2">
                
                <li class="nav-item">
                    <a class="nav-link px-3 rounded-pill {{ Route::is('home') ? 'active fw-bold text-warning bg-secondary bg-opacity-25' : '' }}" 
                       href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3 rounded-pill {{ Request::is('restaurants*') ? 'active fw-bold text-warning bg-secondary bg-opacity-25' : '' }}" 
                       href="/restaurants">Restaurants</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3 rounded-pill {{ Request::is('foods*') ? 'active fw-bold text-warning bg-secondary bg-opacity-25' : '' }}" 

                       href="/foods">Foods</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link px-3 rounded-pill {{ Request::is('categories*') ? 'active fw-bold text-warning bg-secondary bg-opacity-25' : '' }}" 
                       href="/categories">Categories</a>
                </li>

            </ul>
        </div>

    </div>
</nav>


</body>
</html>


