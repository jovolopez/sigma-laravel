<?php

//Vista del home
Route::get('/', function () {
    return view('home');
});

Auth::routes();

//Vista de Perfil
Route::get('/perfil', 'PerfilController@show');

//Carga de Productos
Route::get('/cargarProducto', 'ProductoController@showForm');

//Vista producto
Route::get('/producto', 'ProductoController@showProduct');

//Vista lista
Route::get('/lista', 'ListaController@show');

//Carrito
Route::get('/carrito', 'CarritoController@show');
