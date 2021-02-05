<!DOCTYPE html>
<html lang="{{ str_replace('_', '_', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config("app.name") }}</title>

    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="id">
        @auth
            @include('layouts.partials._navigation')
        @endauth
        @yield('content')
    </div>

    {{-- Scripts --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>