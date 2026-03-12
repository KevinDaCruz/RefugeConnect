<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', config('app.locale')) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'RefugeConnect')</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>
<body>
    @include('partials.header')

    <main class="container">@yield('content')</main>

    <footer>
        <p class="container">{{ date('Y') }} - Refuge Connect</p>
    </footer>
</body>
</html>
