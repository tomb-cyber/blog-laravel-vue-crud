<?php

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

Route::redirect('/', '/blogs');

Route::get('/blogs', 'PostController@index');
Route::get('/blogs/create', 'PostController@create');
Route::post('/blogs', 'PostController@store');
Route::get('/blogs/{blogPost}', 'PostController@show');
Route::get('/blogs/{blogPost}/edit', 'PostController@edit');
Route::put('/blogs/{blogPost}', 'PostController@update');
Route::delete('/blogs/{blogPost}/delete', 'PostController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/settings', 'UserController@show')->name('settings');
Route::get('/settings/edit', 'UserController@edit');
Route::put('/settings/edit', 'UserController@update');
Route::get('/settings/delete', 'UserController@warn');
Route::delete('/settings/delete', 'UserController@destroy');
