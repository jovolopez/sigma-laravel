<?php

//Vista del home
Route::get('/', 'HomeController@index');

Auth::routes();

//Vista de Perfil
Route::get('/perfil', 'PerfilController@show');

//Carrito
Route::get('/carrito', 'CarritoController@show');

//Carga de Productos (Vista de Formulario)
Route::get('/cargarProducto', 'ProductoController@showForm')->middleware('admin');

// Guardado de Productos (Backend)
Route::post('/productsaction', 'ProductoController@saveProduct')->middleware('admin');

//Vista producto
Route::get('/producto', 'ProductoController@showProduct');

//Vista lista
Route::get('/lista', 'ListaController@show');

//Editor de Productos (Vista)
Route::get('/editar/{id}', 'ProductoController@showEditProduct')->middleware('admin');

//Editor de Productos (Back)
Route::post('/editar', 'ProductoController@editProduct')->middleware('admin');
