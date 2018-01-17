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

    /*Ruta para portafolios*/
    Route::get('/porta-architecture', 'VerMasController@masArqui');

    /*Ruta para el blog definitivo*/
    Route::get('/blog',['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
    Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');

    // Comments
    Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);
    Route::get('comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'comments.edit']);
    Route::put('comments/{id}', ['uses' => 'CommentsController@update', 'as' => 'comments.update']);
    Route::delete('comments/{id}', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destroy']);
    Route::get('comments/{id}/delete', ['uses' => 'CommentsController@delete', 'as' => 'comments.delete']);
});


/*Rutas para administradores y usuarios*/
Route::group(['middleware' => ['auth']], function () {
Route::get('/admin-panel', 'AdminController@inicio');

/*Rutas para los posts*/
Route::get('/nuevo-post', 'BlogController@nuevoPost');
Route::post('/PostInsert', 'BlogController@Insertar')->name('Posts.Insert');
Route::resource('posts', 'PostController');
// Categories
    Route::resource('categories', 'CategoryController', ['except' => ['create']]);
    Route::resource('tags', 'TagController', ['except' => ['create']]);


});

