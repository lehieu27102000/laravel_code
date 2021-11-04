<?php

use App\Http\Controllers\ArticlesController;
use Illuminate\Support\Facades\Route;
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
    return view('login');
});

Auth::routes();
Route::resource('blogs', 'ArticlesController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/blogs/edit/{id}', 'ArticlesController@edit')->name('edit');
Route::put('/blogs/update/{id}', 'ArticlesController@update');
Route::get('/blogs/destroy/{id}', 'ArticlesController@destroy');
Route::get('blogs/show/{id}', 'ArticlesController@show')->name('view');
