@extends('layouts.index')


@section('titulo', $receta[0]->nombre)

@section('contenido')



<div class="container">

    <div class="row">

        <div class="col-12">

            <div class="card">
                <img class="card-img-top" src="{{$receta[0]->ruta}}" alt="foto">
                <div class="card-body">
                    <h5 class="card-title"><b>{{$receta[0]->nombre}}</b></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Nacionalidad: {{$receta[0]->nacionalidad}} || Tiempo: {{$receta[0]->tiempo}}</h6>
                    <br>
                    <h6> <b>Ingredientes</b></h6>
                    <p class="card-text"> {{$receta[0]->ingredientes}}</p>
                    <br>
                    <h6> <b>Preparación</b> </h6>
                    <p class="card-text"> {!! nl2br(e($receta[0]->explicacion)) !!}</p>
                </div>
            </div>
            <br><br><br><br>

        </div>
    </div>
</div>

@endsection