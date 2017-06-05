<?php

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

/*Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

*/

Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/NuevoInventario', function () {
    return view('NuevoInventario');
});

Route::get('/NuevoProducto', function () {
    return view('productos');
});

Route::get('/proveedores', function () {
    return view('proveedores');
});

/*Route::group(['middleware' => ['web']], function(){
    Route::resource('/cliente', 'ClientesController');
});

Route::group(['middleware' => ['web']], function(){
    Route::resource('/facturacion', 'FacturacionController');
});

Route::group(['middleware' => ['web']], function(){
    Route::resource('/inventario', 'InventarioController');
});

Route::group(['middleware' => ['web']], function(){
    Route::resource('/producto', 'ProductosController');
});*/