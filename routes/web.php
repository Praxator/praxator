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

/*
Route::get('/', function () {

    \Log::warning("Vergiss es");
    \Debugbar::error('alles ging schief.');
    \Log::debug("Testen");
    \Log::info("nur zur Info");
    \Log::error("Oups");


    return view('welcome');
});
*/

Route::get('/','WelcomeController@index');
Route::resource('recipes', 'RecipesController');

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);
