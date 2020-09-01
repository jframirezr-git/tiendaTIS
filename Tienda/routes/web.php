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
    return view('welcome');
});

//Ruta a la pestaña principal de la clase ventas
Route::get('ventas/index', 'VentasController@index')->name("ventas.index");
//Ruta a mostrar detalles de cada venta
Route::get('ventas/show/{id}', 'VentasController@show')->name("ventas.show");
//Ruta para crear una nueva venta
Route::get('ventas/create', 'VentasController@create')->name("ventas.create");
//Ruta para guarla la venta
Route::post('ventas/save', 'VentasController@save')->name("ventas.save");
//Ruta para mostrar toda la lista de las ventas
Route::get('ventas/showlist', 'VentasController@showlist')->name("ventas.showlist");
//Ruta para eliminar una venta
Route::delete('ventas/delete/{id}', 'VentasController@destroy')->name('ventas.destroy');

