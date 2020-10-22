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
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="{{url('/')}}">Recetario</a>
    </nav>
    <br><br><br>
    @show

    <div class="container">
        @yield('contenido')
    </div>


</body>

</html>