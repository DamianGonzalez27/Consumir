<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('ruta-get/{id}', 'ServiciosController@get');

Route::post('ruta-post', 'Servicioscontroller@post');

Route::put('ruta-put', 'ServiciosController@put');

Route::delete('ruta-delete', 'ServiciosController@delete');
