@extends('layouts.index')

@section('titulo', '')

@section('contenido')

<div class="row">
    <div class="col-12">
        <p id="encabezado">Por favor, seleccione nacionalidad de las recetas</p>
    </div>
</div>


<br>

<div class="row"> 
    <div class="col-4 text-center">
        <a href="{{url('pregunta', ['Historia'])}}" class="btn btn-light btn-lg btn-block">Española</a>
    </div>

    <div class="col-4 text-center">
        <a href="{{url('pregunta', ['Historia'])}}" class="btn btn-light btn-lg btn-block">Italiana</a>
    </div>

    <div class="col-4 text-center">
        <a href="{{url('pregunta', ['Ingles'])}}" class="btn btn-light btn-lg btn-block">Venezolana</a>
    </div>
</div>



@endsection