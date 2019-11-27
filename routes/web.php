<?php

//Vista del home
Route::get('/', function () {
    return view('home');
});

Auth::routes();

//Vista de Perfil
Route::get('/perfil', 'PerfilController@show');

//Carga de Productos
Route::get('/cargaProducto', 'ProductoController@showForm');
