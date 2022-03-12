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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'TopPageController@show')->name('top.show');

Route::group(['middlware' => 'auth'], function() {
        Route::get('game', 'GameController@show')->name('game.show');
        Route::get('game/create', 'GameController@create')->name('game.create');
        Route::post('game/create', 'GameController@store')->name('game.store');
});