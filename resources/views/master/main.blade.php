<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body class="d-flex flex-column min-vh-100">
<!-- Header -->
@component('master.header')
@endcomponent
<!-- Main -->
<main class="py-4">
    @yield('content')
</main>
<!-- Footer -->
@component('master.footer')
@endcomponent
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
@yield('scripts')
</body>
</html>