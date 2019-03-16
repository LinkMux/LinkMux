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

Route::get('/dashboard/{path}', 'IndexController@index');
Route::get('/dashboard', 'IndexController@index');

Route::group(['prefix' => 'api'], function () {
    
});