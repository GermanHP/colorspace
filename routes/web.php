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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'MainController@inicio');
Route::get('/architecture', 'PortfolioController@arqui');
Route::get('/design', 'PortfolioController@design');
Route::get('/webdesign', 'PortfolioController@web');

/* Rutas para Post en el blog*/
Route::get('/newPost', 'BlogController@nuevoPost');

/*Rutas para los perfiles*/
Route::get('/team', 'ProfileController@index');

/*Rutas para administrador*/
Route::get('/admin-panel', 'AdminController@inicio');