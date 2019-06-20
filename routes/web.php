<?php


/*-----------------------Rutas de las vistas del sistema---------------------*/
Route::get('/', 'PagesController@home')->name('home');

Route::get('/crud', 'PagesController@crud')->name('crud');

Route::get('/consumir', 'PagesController@consumir')->name('consumir');
/*-----------------------Rutas de las vistas del sistema---------------------*/

/*-----------------------Rutas de la interaccion con el API---------------------*/
Route::get('/listadoUsuarios', 'CrudController@listado')->name('listadoUsuarios');

Route::get('/crearUsuario', 'CrudController@crear')->name('crearUsuario');

Route::get('/editarUsuario{id}', 'CrudController@editarUsuario')->name('editarUsuario');

Route::get('/eliminarUsuario{id}', 'CrudController@eliminar')->name('eliminarUsuario');

Route::post('/cargarUsuario', 'CrudController@create')->name('create');

Route::get('/unicoUsuario{id}', 'CrudController@unicoUsuario')->name('unicoUsuario');

route::post('/usuarioEditado{id}', 'CrudController@usuarioEditado')->name('usuarioEditado');
/*-----------------------Rutas de la interaccion con el API---------------------*/
