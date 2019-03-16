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

Route::get('/auth/login', 'Auth\LoginController@showLoginForm');
Route::get("/", "MuxController@dashboard");

Route::group(['prefix' => 'api'], function () {

});

Route::group(['prefix' => 'dashboard'], function () {
    Route::get("/", "IndexController@index");
    Route::get("/{path}", "IndexController@index")->where("path", "(.*)");
});

Route::get("/{path}", "MuxController@index")->where("path", "(.*)");
