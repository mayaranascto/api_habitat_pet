<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return redirect('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('/users', 'UsersController');
Route::resource('/plantas', 'PlantasConstroller');
Route::resource('/peixes', 'PeixesConstroller');
Route::resource('/produtos', 'ProdutosController');
Route::resource('/user', 'UserController');
