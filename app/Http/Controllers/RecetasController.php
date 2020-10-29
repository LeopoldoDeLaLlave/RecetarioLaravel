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

    public function subirReceta(Request $request){
        $receta = new Recetas();
        $receta->nombre=$request->nombre;
        $receta->nacionalidad=$request->nacionalidad;
        $receta->ingredientes=$request->ingredientes;
        $receta->nombre=$request->nombre;
        $receta->explicacione=$request->explicacion;
        $receta->tiempo=$request->tiempo;
        $receta->save();
    }
}
