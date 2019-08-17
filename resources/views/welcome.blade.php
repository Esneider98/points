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
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <nav class="navbar navbar-expand-lg navbar-light bg-primary">
                <a class="navbar-brand active" href="{{ route('home') }}">Buscar usuarios</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <div class="nav-item active">

                        </div>
                    </ul>
                    <span class="navbar-text">
                      <div class="nav-item active">
                            <a class="nav-link" href="{{ route('person.list') }}">listado</a>
                        </div>
                    </span>
                </div>
            </nav>

            <div class="container">
                @yield('content')
            </div>
        </div>
    </body>
</html>
