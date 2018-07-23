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

/*Route::get('/', 'MainController@index')->name('home')->middleware('auth');*/
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', 'HomeController@test')->name('test');
Route::get('/view', 'HomeController@view')->name('view');
Route::get('/favorite', 'HomeController@favorite')->name('favorite');
Route::get('/show', 'PostController@show')->name('show');
Route::get('/upload', 'PostController@upload')->name('upload');
Route::get('/files/{type}/{id?}', 'FileController@index');
Route::get('/create', 'PostController@create')->name('create');
Route::get('/index', 'PostController@index')->name('index');
Route::get('/profile', 'PostController@show')->name('profile');
Route::get('/edit', 'PostController@edit')->name('edit');

// Route::get('upload', 'PostController@upload');
Route::post('upload', 'PostController@uploadPost');
// Route::post('upload', 'PostController@store');
Route::post('files/add', 'HomeController@store');
Route::post('files/edit/{id}', 'FileController@edit');
Route::post('files/delete/{id}', 'FileController@destroy');
Route::resource('posts','PostController');
Route::post('posts','PostController@store')->name('store');
Route::post('create', 'PostController@store');
Route::post('edit', 'PostController@edit');
Route::post('store', 'PostController@store')->name('store');
Route::post('show', 'PostController@show');
Route::post('update', 'PostController@update');


