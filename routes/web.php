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
	$posts= ['laravel basico','laravel medio','laravel avanzado'];
    return view('welcome',compact('posts'));
});*/
Route::get('/','PagesController@index');

Route::get('/acerca','PagesController@acerca');
Route::get('/articulos','ArticulosController@index');
Route::get('/articulos/{articulo}','ArticulosController@show');

Route::get('categorias/','CategoriasController@index');
Route::get('categorias/{categoria}','CategoriasController@show');

Route::get('contacto','PagesController@contacto');