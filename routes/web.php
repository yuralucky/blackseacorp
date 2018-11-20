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
Route::delete('/ajax','MainController@ajax');
//Route::get('/searchAjax.js', 'MainController@searchAjax.js');
//
//Route::get('/sort', 'MainController@sort')->name('livesearch');
//Route::get('/tree','MainController@tree');
//Route::get('/treeview','MainController@treeview');
//Route::post ( '/add', 'MainController@addItem' )->name('create');
//Route::get ( '/add', function (){return view('add1');} );
//Route::get ( '/add1', function (){return view('add1');} );
//Route::get ( '/show1', 'MainController@show1' );
//Route::delete('/delete/{id}','MainController@destroy')->name('delete');


