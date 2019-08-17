<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="https://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            @font-face {
                font-family: 'blog';
                src: url({{ asset('img/Fonts/blog.ttf') }});
            }

            h1, p, label, td{
                font-family: 'blog';
                font-size: 24px !important;
            }

            td{
                color: #00ffff;
            }
        </style>
    </head>
    <body style="background-image: url({{ asset('img/elementos-separados/fondo.png') }})">
        <div class="flex-center position-ref full-height">

            <div class="container">
                @yield('content')
            </div>
        </div>
    </body>
</html>
