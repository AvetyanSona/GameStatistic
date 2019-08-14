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

        Route::view('/fortnite','pages.fortnite')->name('fortnite');
        Route::view('/lol','pages.lol')->name('lol');
        Route::view('/hearthstone','pages.hearthstone')->name('hearthstone');
        Route::view('/csgo','pages.csgo')->name('csgo');
        Route::view('/overwatch','pages.overwatch')->name('overwatch');
        Route::view('/dota2','pages.dota2')->name('dota2');
        Route::view('/wot','pages.wot')->name('wot');

        Route::post('/wot/wot-search','WOT\WOTController@getUserStats')->name('wot-search');
        Route::get('/wot/main','WOT\WOTController@index');
    });
});
