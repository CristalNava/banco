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


Route::get('/', function () {
    return view('pagina_principal');
});

Route::get('/Reportes_prestamo','ReportesController@showForm');

Route::Post('/Reportes_prestamo','ReportesController@store');

Route::get('/Reregistro_usuario','Auth\RegisterController@showForm');
Route::Post('/Registro_usuario','Auth\RegisterController@store');

Route::get('/tarjetas_debito','tarjetadebitoController@showForm');
Route::post('/tarjetas_debito','tarjetadebitoController@store');

Route::get('/tarjeta_credito','tarjetacreditoController@showForm');
Route::post('/tarjeta_credito','tarjetacreditoController@store');

Route::resource('products','productController');


Route::resource('tarjetas','TarjetasController');

Route::resource('prestamos','prestamosController');

Route::resource('reportes','reportesController');




