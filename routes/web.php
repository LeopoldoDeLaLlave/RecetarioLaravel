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

Route::get('/', function () {
    return view('index');
});

Route::get('/subir', function () {
    return view('subir');
});

Route::get('recetas/{nacionalidad}', 'RecetasController@devuelveRecetas');
Route::get('receta/{id}', 'RecetasController@devuelveReceta');