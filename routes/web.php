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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', 'UsuarioController@getAll');
Route::post('/posts/create', 'UsuarioController@create');
Route::get('/posts/index', 'UsuarioController@index');
Route::post('/posts/update', 'UsuarioController@update');
Route::delete('/posts/delete', 'UsuarioController@delete');