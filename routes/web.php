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

Route::get('/','BaseController@getIndex');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('start', 'RoomController@getStart');
Route::get('room/{url}', 'RoomController@getindex');
Route::post('ajax/room','AjaxController@postRoom');
Route::post('ajax','AjaxController@postIndex');
Route::get('{url}', 'RoomController@getindex'); //всегда в конце