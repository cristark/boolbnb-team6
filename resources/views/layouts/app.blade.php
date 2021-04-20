<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'BoolBnB | Home Page')</title>
    <!-- Link FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Link Vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        {{-- HEADER --}}
        @include('partials.user-header')

        {{-- MAIN --}}
        <main>
            @yield('content')
        </main>

        {{-- FOOTER --}}
        @include('partials.footer')
    </div>
</body>
</html>
