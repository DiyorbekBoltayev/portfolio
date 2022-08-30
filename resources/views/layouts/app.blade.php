<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="description" content="Dasturchi Diyorbek Boltayevning rasmiy web-sayti">
    <meta name="keywords" content="Diyorbek, Diyorbek Boltayev, Dasturchi, Dastur tuzish,  PHP, Laravel">
    <meta property="og:title" content="Dasturchi">
    <meta property="og:description" content="Batafsil ma'lumot uchun saytga tashrif buyuring">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://diyorbekboltayev.uz">
    <meta property="og:site_name" content="Diyorbek Boltayev">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Diyorbek Dasturchi</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @yield('custom-style')
</head>
<body >
<div class="container">
            @yield('content')
</div>
@yield('custom-js')
</body>
</html>
