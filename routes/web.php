<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Carga el index
Route::get('/', function () {
    return view('index');
});

//Carga el formulario de subida
Route::get('/subir', function () {
    return view('subir');
});

//Route::post('/subir', 'RecetasController@subirReceta');
//Carga las recetas de una nacionalidad
Route::get('recetas/{nacionalidad}', 'RecetasController@devuelveRecetas');
//Carga la receta seleccionada
Route::get('receta/{id}', 'RecetasController@devuelveReceta');