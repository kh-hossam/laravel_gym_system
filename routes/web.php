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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('city', 'CityController');
Route::resource('gym', 'GymController');
Route::resource('coach', 'CoachController');
Route::get('sessions/get-json-data', 'SessionsController@getJsonData');
Route::resource('sessions', 'SessionsController');
Route::get('packages/get-json-data', 'PackagesController@getJsonData');
Route::resource('packages', 'PackagesController');