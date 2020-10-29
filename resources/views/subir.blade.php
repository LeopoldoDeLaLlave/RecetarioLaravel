@extends('layouts.index')


@section('titulo', "Subir")

@section('contenido')

<div class="container">

    <form action="../../app/Http/Controllers" method="post">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre de la receta</label>
            <input type="text" class="form-control" id="nombre" maxlength="80" required>
        </div>
        <div class="form-group">
            <label for="nacionalidad">Nacionalidad</label>
            <select class="form-control" id="nacionalidad" required>
                <option>Española</option>
                <option>Italiana</option>
                <option>Venezolana</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tiempo">Tiempo de preparación</label>
            <input type="text" class="form-control" id="tiempo" maxlength="30" required>
        </div>
        <div class="form-group">
            <label for="ingredientes">Ingredientes</label>
            <input type="text" class="form-control" id="ingredientes" maxlength="450" required>
        </div>
        <div class="form-group">
            <label for="preparacion">Preparación</label>
            <textarea class="form-control" id="preparacion" rows="20"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" style="text-align: right;">Subir</button>
    </form>
    <br><br><br>

</div>

@endsection