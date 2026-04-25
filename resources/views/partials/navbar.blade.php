

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

        /* .card:hover {
            transform: scale(1.05);
            transition: 0.3s;
        } */
    </style>
</head>
<body>

<!-- 🔝 Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Lezzet Guide</a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/restaurants">Restaurants</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('foods.index')}}">Foods</a>
                </li>
                <li class="nav-item">
                     <a class="nav-link" href="{{route('categories.index')}}">Categories</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

</body>
</html>


