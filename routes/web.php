<?php

//Vista del home
Route::get('/', 'HomeController@index');

Auth::routes();

//Vista de Perfil
Route::get('/perfil', 'PerfilController@show');

//Carrito
Route::get('/carrito', 'ProductoController@addToCart');

//Carga de Productos (Vista de Formulario)
Route::get('/cargarProducto', 'ProductoController@showForm')->middleware('admin');

// Guardado de Productos (Backend)
Route::post('/productsaction', 'ProductoController@saveProduct')->middleware('admin');

//Vista producto
Route::get('/producto/{id}', 'ProductoController@showProduct');

//Vista lista
Route::get('/lista', 'ListaController@show');

//Editor de Productos (Vista)
Route::get('/editar/{id}', 'ProductoController@showEditProduct')->middleware('admin');

//Guardado de productos (Back)
Route::post('/editarProducto', 'ProductoController@editProduct')->middleware('admin');

//Eliminando productos (Back)
route::post("/borrarProducto","productoController@downProduct")->middleware("admin");;
//Vista Buscador
Route::get('/search', 'ListaController@search');

//Vista lista filtrada
Route::get('lista/{id}', 'ListaController@show');

//Vista preguntas
Route::get('/preguntas', 'PreguntasController@show');

//vista Contacto
Route::get('/contacto', 'ContactoController@show');

//Vista Buscador
Route::get('/search', 'ListaController@search');

//Agregar Producto al carrito
Route::post("/agregarAlCarrito","ProductoController@addToCart");

//Vista Carrito
Route::get("/carrito", "ProductoController@showCart");

//Sacar Producto de carrito
Route::post("/sacarDelCarrito","ProductoController@removeToCart");
