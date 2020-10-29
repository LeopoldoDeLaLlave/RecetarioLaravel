@extends('layouts.index')


@section('titulo', $receta[0]->nacionalidad)

@section('contenido')
<div class="container">



    @for ($i = 0; $i < count($receta); $i++) 
    <div class="row">
        <div class="col-6">
            <div class="card h-1 center-block" style="width: 18rem;">
            <img class="card-img-top" src="{{$receta[$i]->ruta}}" alt="foto">
                <div class="card-body">
                    <a href="{{url('receta', [$receta[$i]->id])}}">
                        <h5 class="card-title">{{ $receta[$i]->nombre }}</h5>
                    </a>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $receta[$i]->tiempo }}</h6>
                    <p class="card-text">{{(substr($receta[$i]->explicacion, 0,200)."...")}}</p>
                </div>

            </div>
        </div>
        @php
        $i++
        @endphp
        @if ($i <=(count($receta)-1)) <div class="col-6 ">
            <div class="card h-1 center-block" style="width: 18rem;">
                <img class="card-img-top" src="{{$receta[$i]->ruta}}" alt="foto">
                <div class="card-body">
                    <a href="{{url('receta', [$receta[$i]->id])}}">
                        <h5 class="card-title">{{ $receta[$i]->nombre }}</h5>
                    </a>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $receta[$i]->tiempo }}</h6>
                    <p class="card-text">{{(substr($receta[$i]->explicacion, 0,200)."...")}}</p>
                </div>

            </div>
</div>
@endif
</div>
<br><br><br><br>

@endfor

</div>
@endsection