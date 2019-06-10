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

route::group(['prefix'=>'city'], function()
{
    Route::get('index', 'CityController@index');    
    Route::get('/create', 'CityController@create')->name('city.create');
    Route::post('/store', 'CityController@store')->name('city.store');
    Route::get('/edit/{id}', 'CityController@edit')->name('city.edit');
    Route::post('/update/{id}', 'CityController@update')->name('city.update');
    Route::get('/delete/{id}', 'CityController@delete')->name('city.delete');
});

route::group(['prefix'=>'customer'], function()
{
    Route::get('index', 'CustomerController@index')->name('customer.index');    
    Route::get('/create', 'CustomerController@create')->name('customer.create');
    Route::post('/store', 'CustomerController@store')->name('customer.store');
    Route::get('/edit/{id}', 'CustomerController@edit')->name('customer.edit');
    Route::post('/update/{id}', 'CustomerController@update')->name('customer.update');
    Route::get('/delete/{id}', 'CustomerController@delete')->name('customer.delete');
    Route::get('/search', 'CustomerController@search')->name('customer.search');
    Route::get('/filter','CustomerController@filterByCity')->name('customer.filterByCity');
});
