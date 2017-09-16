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
/*Rutas generales*/
Route::get('/architecture', 'PortfolioController@arqui');
Route::get('/design', 'PortfolioController@design');
Route::get('/webdesign', 'PortfolioController@web');

/*Rutas del blog*/
Route::get('/newPost', 'BlogController@nuevoPost');

/*Rutas para perfiles*/
Route::get('/team', 'ProfileController@index');

/*Rutas para administradores y usuarios*/
Route::group(['middleware' => ['auth']], function () {
Route::get('/admin-panel', 'AdminController@inicio');

});

/*Ruta para portafolios*/
Route::get('/porta-architecture', 'VerMasController@masArqui');