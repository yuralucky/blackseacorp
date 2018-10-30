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



Route::get('/', 'MainController@treeview');
Route::get('/search', 'MainController@search');
Route::get('/save','MainController@save')->name('add.category');
Route::get('/livesearch', 'MainController@searchAjax1')->name('livesearch');
Route::get('/tree','MainController@tree');
Route::get('/treeview','MainController@treeview');

