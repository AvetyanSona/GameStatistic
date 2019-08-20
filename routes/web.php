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

Route::get('logout', 'Auth\LoginController@');

Route::middleware('auth')->group(function () {
    Route::namespace('Admin')->group(function () {
        Route::get('/', 'MainController@index')->name('main');

        Route::namespace('WOT')->group(function () {
            Route::get('/wot', 'WOTController@index')->name('wot');
            Route::get('/wot/statistics','WOTController@statistics')->name('wot.statistics');
            Route::post('/wot/statistics/request','WOTController@getUserStats')->name('wot-search-request');
            Route::get('/wot/wot-news','WOTController@news')->name('wot.news');
            Route::get('/wot/wot-news/create','WOTController@create')->name('wot.news.create');
            Route::get('/wot/wot-news/{id}','WOTController@show')->name('wot.news.show');
        });
    });
});
