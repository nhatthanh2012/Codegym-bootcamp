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
Route::get('index', 'BlogController@index')->name('index');
Route::get('create', 'BlogController@create')->name('create');
Route::post('store', 'BlogController@store')->name('store');
Route::get('edit/{id}', 'BlogController@edit')->name('edit');
Route::post('update/{id}', 'BlogController@update')->name('update');
Route::get('destroy/{id}', 'BlogController@destroy')->name('destroy');
Route::get('show/{id}', 'BlogController@show')->name('show');