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

Route::group(['middleware' =>['web']], function (){
    Route::get('/', 'MainController@inicio');

    /*Ruta para variable de sesión*/
    Route::get('lang/{lang}', function($lang){
        session(['lang' => $lang]);
        return redirect()->back();
    })->where([
        'lang' => 'en|es'
    ]);

    /*Rutas generales*/
    Route::get('/architecture', 'PortfolioController@arqui');
    Route::get('/design', 'PortfolioController@design');
    Route::get('/webdesign', 'PortfolioController@web');

    /*Rutas del blog*/
    Route::get('/newPost', 'BlogController@nuevoPost');

    /*Rutas para perfiles*/
    Route::get('/team', 'ProfileController@index');

    /*Ruta para portafolios Arquitectura*/
    Route::get('/porta-architecture', 'VerMasController@masArqui');

    /*Rutas para Portafolios Desarrollo Web */
    Route::get('/wordpress-development', 'DevPortfolioController@devWordpress');

    /*Ruta para el blog temporal*/
    Route::get('/blog','BlogTempController@blogTemp');
});


/*Rutas para administradores y usuarios*/
Route::group(['middleware' => ['auth']], function () {
Route::get('/admin-panel', 'AdminController@inicio');




});

