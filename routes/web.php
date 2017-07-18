<?php

//WEB ROUTES

// Welcome index page
Route::get('/', function () {
    return view('welcome');
});

// Catalog of collections
Route::group(['prefix' => 'catalog', 'namespace' => 'Catalog'], function () {
    Route::get('/', 'CatalogController@index')->name('catalog.index');
});

// Collection
Route::group(['prefix' => 'collection', 'namespace' => 'Collection'], function () {
    Route::get('/{id}', 'CollectionController@index')->name('collection.index');
});

// Auth routes
Auth::routes();

// User dashboard
Route::get('/home', 'HomeController@index')->name('home');

//WEBAPI ROUTES

// Web API for VUE components
Route::group(['prefix' => 'webapi', 'namespace' => 'Api'], function () {
    Route::get('/catalog', 'CatalogController@index');
});
