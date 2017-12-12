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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'products', 'where'=>['id'=>'[0-9]+']], function() {
  Route::get('', 'ProductController@index');
  Route::get('{id}', 'ProductController@show');
  Route::get('{id}/edit','ProductController@edit');
  Route::put('{id}','ProductController@update');
  Route::get('create', 'ProductController@create');
  Route::post('', 'ProductController@store');
  Route::get('delete/{id}', 'ProductController@destroy');
});

Auth::routes();
