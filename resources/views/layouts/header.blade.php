<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lezzet Guide</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
</head>

<body>
    @include('partials.navbar')
    @yield("main-content")
</body>

</html>