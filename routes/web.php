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


Route::resource('/item', 'ItemController');
Route::get('/', 'ItemController@index');
Route::get('/search', 'MainController@search')->name('search');
Route::get('/ajax','MainController@ajax')->name('ajax');
Route::get ( '/index1', 'MainController@index' );
Route::post ( '/index1', 'MainController@store' );



