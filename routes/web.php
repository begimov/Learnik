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

Route::get('/catalog', 'CatalogController@index');

Route::get('/collection', 'CollectionController@index');

Route::get('/collection/{id}/cards', 'CardsController@index');

Route::group(['prefix' => 'webapi', 'namespace' => 'Api'], function () {
  Route::get('/cards', 'CardsController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
