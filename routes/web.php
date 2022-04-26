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

Route::group(['prefix' => 'admin'], function() {
    Route::get('original/create', 'Admin\OriginalController@add');
    Route::get('original/create', 'Admin\OriginalController@create');
    Route::get('original/edit', 'Admin\OriginalController@edit');
});

Route::get('/original','OriginalController@index');