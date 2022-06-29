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
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'ItemController@index')->name('top');


Route::get('/home', 'HomeController@index')->name('home');

//users{user}
Route::get('/users' ,'UserController@show')->name('users.show');

//users/{user}/exhibitions
Route::get('users/exhibitions', 'ItemController@exhibitions')->name('users.exhibitions');

//
Route::get('/likes', 'LikeController@index')->name('likes.index');