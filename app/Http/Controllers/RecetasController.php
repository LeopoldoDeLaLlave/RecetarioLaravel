<?php
/*
*Autor: Javier de la Llave
*Controla el cargado de las vistas con recetas
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Recetas;

class RecetasController extends Controller
{

    //Devuelve una vista con recetas de una nacionalidad   
    public function devuelveRecetas($nacionalidad){
        return view('recetas')->with('receta', Recetas::where('nacionalidad', $nacionalidad)->get());
    }

    //Devuelve una vista con una receta en función del id
    public function devuelveReceta($id){
        return view('receta')->with('receta', Recetas::where('id', $id)->get());
    }

    // public function subirReceta(Request $request){
    //     $receta = new Recetas();
    //     $receta->nombre=$request->nombre;
    //     $receta->nacionalidad=$request->nacionalidad;
    //     $receta->ingredientes=$request->ingredientes;
    //     $receta->nombre=$request->nombre;
    //     $receta->explicacione=$request->explicacion;
    //     $receta->tiempo=$request->tiempo;
    //     $receta->save();
    // }
}
