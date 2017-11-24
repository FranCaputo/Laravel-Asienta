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

//Páginas estáticas

Route::get("/experiencias", "MainController@aExp");

Route::get("/nuestraHistoria", "MainController@aNH");

Route::get("/comoRealizarCompra", "MainController@aCRP");

Route::get("/preguntasFrecuentes", "MainController@aPF");

Route::get("/contacto", "MainController@aContacto");

Route::get("/nosotros", "MainController@aNosotros");

Route::get("/home", "MainController@aHome");

Route::get('/', function () {
    return view('welcome');
});
