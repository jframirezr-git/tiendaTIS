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
//ruta principal
Route::get('/', 'ItemController@show')->name("item.show");

//rutas customer
Route::get('/customer', 'CustomerController@index')->name("customer.index");
Route::get('/customer/show/', 'CustomerController@showCustomers')->name("customer.showCustomers");
Route::get('/customer/show/{id}', 'CustomerController@show')->name("customer.show");
Route::get('/customer/create', 'CustomerController@create')->name("customer.create");
Route::post('/customer/save', 'CustomerController@save')->name("customer.save");
Route::delete('customer/delete/{id}', 'CustomerController@deletecustomer')->name('customer.deletecustomer');

//rutas input
Route::get('/input', 'InputController@index')->name("input.index");
Route::get('/input/show/', 'InputController@showInputs')->name("input.showInputs");
Route::get('/input/show/{id}', 'InputController@show')->name("input.show");
Route::get('/input/create', 'InputController@create')->name("input.create");
Route::post('/input/save', 'InputController@save')->name("input.save");
Route::delete('input/delete/{id}', 'InputController@deleteinput')->name('input.deleteinput');

//rutas output
Route::get('/output', 'OutputController@index')->name("output.index");
Route::get('/output/show/', 'OutputController@showOutputs')->name("output.showOutputs");
Route::get('/output/show/{id}', 'OutputController@show')->name("output.show");
Route::get('/output/create', 'OutputController@create')->name("outnput.create");
Route::post('/output/save', 'OutputController@save')->name("output.save");
Route::delete('output/delete/{id}', 'OutputController@deleteoutput')->name('input.deleteoutput');

//rutas items
Route::get('/items', 'ItemController@show')->name("item.show");
Route::get('/items/create', 'ItemController@create')->name("item.create");
Route::post('/items/save', 'ItemController@save')->name("item.save");
Route::get('/items/show/{id}', 'ItemController@showItem')->name("item.show_item");
Route::delete('items/delete/{id}', 'ItemController@deleteItem')->name('item.delete');

//rutas supplier
Route::get('/supplier', 'SupplierController@showList')->name("supplier.show_list");
Route::get('/supplier/show/{id}', 'SupplierController@show')->name("supplier.show");
Route::get('/supplier/create', 'SupplierController@create')->name("supplier.create");
Route::post('/supplier/save', 'SupplierController@save')->name("supplier.save");
Route::delete('/supplier/delete/{id}', 'SupplierController@deletecustomer')->name('supplier.delete');

//rutas ventas
Route::get('/sale', 'SaleController@showList')->name("sale.show_list");
Route::get('/sale/show/{id}', 'SaleController@show')->name("sale.show");
Route::post('/sale/save', 'SaleController@save')->name("sale.save");
