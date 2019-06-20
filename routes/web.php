<?php


/*-----------------------Rutas de las vistas del sistema---------------------*/
Route::get('/', 'PagesController@home')->name('home');

Route::get('/crud', 'PagesController@crud')->name('crud');

Route::get('/consumir', 'PagesController@consumir')->name('consumir');
/*-----------------------Rutas de las vistas del sistema---------------------*/

Route::get('/listadoUsuarios', 'CrudController@listado')->name('listadoUsuarios');
