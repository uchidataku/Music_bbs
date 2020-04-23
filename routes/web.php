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
Route::get('user/{id}', 'HomeController@usershow')->name('usershow');
Route::post('user/destory/{id}', 'HomeController@userdestroy')->name('userdestroy');

Route::get('category_index', 'PostController@category_index')->name('category_index');
Route::get('category/{id}', 'PostController@category')->name('category');

Route::get('posts/index', 'PostController@index')->name('posts.index');
Route::resource('posts', 'PostController')->except(['index', 'update', 'destory']);
Route::post('posts/update/{id}', 'PostController@update')->name('posts.update');
Route::post('posts/destory/{id}', 'PostController@destroy')->name('posts.destroy');

Route::resource('responses', 'ResponseController')->only(['create', 'store']);
Route::post('responses/destory/{id}', 'ResponseController@destroy')->name('responses.destroy');