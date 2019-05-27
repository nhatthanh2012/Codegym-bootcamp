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

// quan ly tinh
Route::get('/city/index', 'CityController@index')->name('city.index');
Route::get('/city/create', 'CityController@create')->name('city.create');
Route::post('/city/store', 'CityController@store')->name('city.store');
Route::get('/city/edit/{id}', 'CityController@edit')->name('city.edit');
Route::post('/city/update/{id}', 'CityController@update')->name('city.update');
Route::get('/city/delete/{id}', 'CityController@delete')->name('city.delete');

// quan ly khach hang
Route::get('/customer/index', 'CustomerController@index')->name('customer.index');
Route::get('/customer/create', 'CustomerController@create')->name('customer.create');
Route::post('/customer/store', 'CustomerController@store')->name('customer.store');
Route::get('/customer/edit/{id}', 'CustomerController@edit')->name('customer.edit');
Route::post('/customer/update/{id}', 'CustomerController@update')->name('customer.update');
Route::get('/customer/delete/{id}', 'CustomerController@delete')->name('customer.delete');