<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Recetas;

class RecetasController extends Controller
{

    public function devuelveReceta($nacionalidad){
        return view('recetas')->with('receta', Recetas::where('nacionalidad', $nacionalidad)->get());
    }
}
