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
Route::resource('crud','CrudsController');
//Route::get('dropdownlist','DropdownController@index');
//Route::get('get-state-list','DropdownController@getStateList');
//Route::get('get-city-list','DropdownController@getCityList');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/homePage', 'HomeController@homePage')->name('homePage');
Route::get('postcodes','HomeController@postcodes');
Route::get('postcodes-list','HomeController@getStateList');
Route::get('/google_map','HomeController@google_map')->name('google_map');
//Route::get('get-city-list','HomeController@getCityList');
