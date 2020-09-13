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
    return view('customer.index');
});

//rutas customer
Route::get('/customer', 'CustomerController@index')->name("customer.index");
Route::get('/customer/show/', 'CustomerController@showCustomers')->name("customer.showCustomers");
Route::get('/customer/show/{id}', 'CustomerController@show')->name("customer.show");
Route::get('/customer/create', 'CustomerController@create')->name("customer.create");
Route::post('/customer/save', 'CustomerController@save')->name("customer.save");
Route::delete('customer/delete/{id}', 'CustomerController@deletecustomer')->name('customer.deletecustomer');

//rutas input
Route::get('/input', 'InputController@index')->name("input.index");