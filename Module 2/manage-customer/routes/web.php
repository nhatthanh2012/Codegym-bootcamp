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


Route::get('/', function()
{
    return view('welcome');
});
// quan ly khach hang
Route::get('/index', 'CustomerController@index')->name('index');
Route::get('/create', 'CustomerController@create')->name('create');
Route::post('/store','CustomerController@store')->name('store');
Route::get('/edit/{id}', 'CustomerController@edit')->name('edit');
Route::post('/edit/{id}', 'CustomerController@update')->name('update');
Route::get('/destroy/{id}', 'CustomerController@destroy')->name('destroy');