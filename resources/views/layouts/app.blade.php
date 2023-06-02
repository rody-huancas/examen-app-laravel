<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <header>
            <ul>
                <li><a href="{{route('inicio')}}">Inicio</a></li>
                <li><a href="{{route('crear')}}">Crear</a></li>
            </ul>
        </header>
        <h1>Examen</h1>

        <main>
            @yield('content')
        </main>

        <script src="https://kit.fontawesome.com/0a36c73c11.js" crossorigin="anonymous"></script>
    </body>
</html>
