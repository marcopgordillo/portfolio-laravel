<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet"/>

    <!-- Scripts -->
    <script defer src="{{ mix('js/app.js') }}"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.9.5/cdn.min.js" integrity="sha512-1iCQtkVgrDML26orqlbXcO01YaRFpz5CEan+Y0Qhh6cQhcAlPPeJb9cbcNY7/YI7Sy+fIPxPGNuKiF8xjcw3Mg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script defer src="https://apis.google.com/js/platform.js"></script>
</head>
<body class="antialiased text-gray-800 dark:text-gray-200">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 pt-24">
        <!-- ====== Navbar Section Start -->
        <x-layout.navbar></x-layout.navbar>
        <!-- ====== Navbar Section End -->
            {{ $slot }}
        <x-layout.footer></x-layout.footer>
    </div>
</body>
</html>
