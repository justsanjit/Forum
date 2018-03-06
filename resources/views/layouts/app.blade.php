<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            margin-bottom: 100px;
        }

        .flex {
            display: flex;
        }

        .level {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .mr-1 { margin-right: 10px; }

        [v-cloak] { display: none; }

        
    </style>
</head>
<body>
    <div id="app">
        
        @include('layouts.nav')

        @yield('content')

        <flash message="{{ session('flash') }}"></flash>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
