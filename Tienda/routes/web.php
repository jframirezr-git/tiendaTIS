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
    return view('homeCliente.index');
});

Route::get('/cliente', 'ClienteController@index')->name("homeCliente.index");
Route::get('/cliente/show/', 'ClienteController@showClients')->name("cliente.showClients");
Route::get('/cliente/show/{id}', 'ClienteController@show')->name("cliente.show");
Route::get('/cliente/create', 'ClienteController@create')->name("cliente.create");
Route::post('/cliente/save', 'ClienteController@save')->name("cliente.save");
Route::delete('cliente/delete/{id}', 'ClienteController@deleteclient')->name('cliente.deleteclient');
