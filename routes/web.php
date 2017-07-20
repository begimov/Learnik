<?php

//WEB ROUTES

// Welcome index page
Route::get('/', function () {
    return view('welcome');
});

Route::resource('themes', 'ThemeController');
Route::resource('collections', 'CollectionController');
Route::resource('cards', 'CardController');

// Auth routes
Auth::routes();

//WEBAPI ROUTES

// Web API for VUE components
Route::group(['prefix' => 'webapi', 'namespace' => 'WebApi'], function () {
    Route::get('/themes', 'ThemeController@index');
    Route::get('/themes/{theme}', 'ThemeController@show');
    Route::get('/collections/{collection}', 'CollectionController@show');
    Route::post('/cards', 'CardController@store');
});
