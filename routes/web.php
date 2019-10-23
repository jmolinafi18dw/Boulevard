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

Route::get('/','TiendaController@landingPage')->name('welcome');
Route::get('/t-{id}/','TiendaController@getTienda')->name('tienda');
Route::get('/t-{id}/gestion/{lang}','TiendaController@getGestion')->name('gestion');

Route::get('/t-{id}/anadir','TiendaController@goAnadir')->name('anadir');
Route::post('/t-{id}/anadir','TiendaController@nuevoProducto')->name('nuevoProducto');

Route::get('/t-{id}p-{pId}/eliminar','TiendaController@eliminarProducto')->name('eliminarProducto');
Route::post('/t-{id}p-{pId}/cambiarStock','TiendaController@cambiarStock')->name('cambiarStock');

