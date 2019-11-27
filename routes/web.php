<?php


Route::get('/', function () {
    return view('home');
});

Auth::routes();

//Vista del home
Route::get('/home', 'HomeController@index')->name('home');

//Vista de Perfil
Route::get('/perfil', 'PerfilController@show');

//Carga de Productos
Route::get('/cargaProducto', 'ProductoController@showForm');
