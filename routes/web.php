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
    Route::post('original/create', 'Admin\OriginalController@create');
    Route::get('original/edit', 'Admin\OriginalController@edit');
    Route::post('original/edit', 'Admin\OriginalController@update');
    Route::get('original/index', 'Admin\OriginalController@index');
});

Route::get('/','FrontController@index');
Route::get('/design','FrontController@design');
Route::get('/contact','FrontController@contact');
Route::get('/coordinate','FrontController@coordinate');
Route::post('/confirm','FrontController@confirm');
Route::post('/thanks','FrontController@thanks');