<?php

//Vista del home
Route::get('/', function () {
    return view('home');
});

Auth::routes();

//Vista de Perfil
Route::get('/perfil', 'PerfilController@show');

//Carrito
Route::get('/carrito', 'CarritoController@show');

//Carga de Productos (Vista de Formulario)
Route::get('/cargarProducto', 'ProductoController@showForm');

// Guardado de Productos (Backend)
Route::post('productsaction', 'ProductoController@saveProduct');

//Vista producto
Route::get('producto', 'ProductoController@showProduct');
