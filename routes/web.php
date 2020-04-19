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



Auth::routes();

Route::get('/', 'HomeController@toppage')->name('toppage');

Route::resource('posts', 'PostController')->except(['update', 'destory']);
Route::post('update/{id}', 'PostController@update')->name('posts.update');
Route::post('destory/{id}', 'PostController@destroy')->name('posts.destroy');

Route::resource('responses', 'ResponseController')->only(['create', 'store']);
Route::post('responses/destory/{id}', 'ResponseController@destroy')->name('responses.destroy');