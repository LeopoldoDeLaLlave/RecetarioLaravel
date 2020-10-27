@extends('layouts.index')


@section('titulo', "Subir")

@section('contenido')

<div class="container">

    <form>
        <div class="form-group">
            <label for="nombreReceta">Nombre de la receta</label>
            <input type="text" class="form-control" id="nombreReceta" maxlength="80" required>
        </div>
        <div class="form-group">
            <label for="nacionalidadReceta">Nacionalidad</label>
            <select class="form-control" id="nacionalidadReceta" required>
                <option>Española</option>
                <option>Italiana</option>
                <option>Venezolana</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tiempoReceta">Tiempo de preparación</label>
            <input type="text" class="form-control" id="tiempoReceta" maxlength="30" required>
        </div>
        <div class="form-group">
            <label for="ingredientesReceta">Ingredientes</label>
            <input type="text" class="form-control" id="ingredientesReceta" maxlength="450" required>
        </div>
        <div class="form-group">
            <label for="preparacionReceta">Preparación</label>
            <textarea class="form-control" id="preparacionReceta" rows="20"></textarea>
        </div>
         <button type="submit" class="btn btn-primary" style="text-align: right;">Subir</button>
    </form>
    <br><br><br>

</div>

@endsection