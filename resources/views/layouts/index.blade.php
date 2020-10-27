<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Recetario - @yield('titulo')</title>
</head>

<body>
    @section('navbar')
    <!-- As a heading -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{url('/')}}">Recetario</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="{{url('/subir')}}">Subir</a>
                </li>
            </ul>
        </div>
    </nav>
    <br><br><br>
    @show

    <div class="container">
        @yield('contenido')
    </div>


</body>

</html>