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
Route::group(['prefix'=>'customer'], function() 
{
    Route::get('index', 'CustomerController@index'); //hien thi danh sach KH

    Route::get('create', 'CustomerController@create'); // hien thi form tao KH
  
    Route::post('store', ['as'=>'store' ,'uses'=>'CustomerController@store']); // xu ly du lieu qua POST
  
    Route::get('{id}/show', 'CustomerController@show'); // hien thi khach hang theo id
  
    Route::get('{id}/edit', 'CustomerController@edit'); // chinh sua thong tin KH
  
    Route::patch('{id}/update', 'CustomerController@update'); // xu ly du lieu chinh sua tu form qua PATCH
  
    Route::delete('{id}', 'CustomerController@destroy'); // xoa thong tin khach hang
});

Route::get('login', 'loginController@getLogin');
Route::post('login', 'loginController@postLogin');// chưa làm xong

// Kiem Tra email hop le
Route::get('checkmail', 'loginController@checkmail');
// May tinh
route::get('calculator', 'CalculatorController@calculate');