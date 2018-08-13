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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/show4', 'HomeController@show4')->name('show4');

Auth::routes();
$this->get('/verify-user/{code}', 'Auth\RegisterController@activateUser')->name('activate.user');


/*Route::get('/', 'MainController@index')->name('home')->middleware('auth');*/
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', 'HomeController@test')->name('test');
Route::get('/view', 'HomeController@view')->name('view');
Route::get('/favorite', 'HomeController@favorite')->name('favorite');
Route::get('/riwayat', 'HomeController@riwayat')->name('riwayat');

Route::get('/show', 'VideoController@show')->name('show');
Route::get('/upload', 'VideoController@upload')->name('upload');
Route::get('/create', 'VideoController@create')->name('create');
Route::get('/index', 'VideoController@index')->name('index');
Route::get('/profile', 'VideoController@show')->name('profile');
Route::get('/edit', 'VideoController@edit')->name('edit');


// Route::get('upload', 'PostController@upload');
Route::post('upload', 'VideoController@uploadPost');
// Route::post('upload', 'PostController@store');
Route::resource('videos','VideoController');
Route::post('post','VideoController@store')->name('store');
Route::post('create', 'VideoController@store');
Route::post('delete', 'VideoController@destroy');
Route::post('edit', 'VideoController@edit');
Route::post('store', 'VideoController@store')->name('store');
Route::post('show', 'VideoController@show');
Route::post('update', 'VideoController@update');
Route::post('answer', 'QuizController@answer');

Route::post('like', 'VideoController@like')->name('like');
Route::post('unlike', 'VideoController@unlike')->name('unlike');


