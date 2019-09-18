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

Route::prefix('cataloguemodule')->group(function() {
    Route::get('/', 'CatalogueModuleController@index');
    Route::post('/create','CatalogueModuleController@create');
    Route::post('/delete','CatalogueModuleController@delete');
    Route::post('/update','CatalogueModuleController@update');
});
