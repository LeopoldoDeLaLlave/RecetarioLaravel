<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Recetas;

class RecetasController extends Controller
{

    public function devuelveRecetas($nacionalidad){
        return view('recetas')->with('receta', Recetas::where('nacionalidad', $nacionalidad)->get());
    }
    public function devuelveReceta($id){
        return view('receta')->with('receta', Recetas::where('id', $id)->get());
    }
}
