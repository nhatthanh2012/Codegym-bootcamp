<?php



Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'category'],function(){   
    Route::get('/index','CategoryController@index')->name('category.index');
    Route::get('/create','CategoryController@create')->name('category.create');
    Route::post('/store','CategoryController@store')->name('category.store');
    Route::get('/edit/{id}','CategoryController@edit')->name('category.edit');
    Route::post('/update/{id}','CategoryController@update')->name('category.update');
    Route::get('/delete/{id}','CategoryController@delete')->name('category.delete');
});
Route::group(['prefix'=>'post'], function()
{
    Route::get('/index', 'PostController@index')->name('post.index');
    Route::get('/create', 'PostController@create')->name('post.create');
    Route::post('/store', 'PostController@store')->name('post.store');
    Route::get('/edit/{id}','PostController@edit')->name('post.edit');
    Route::post('/update/{id}','PostController@update')->name('post.update');
    Route::get('/delete/{id}','PostController@delete')->name('post.delete');
    Route::get('/show/{id}', 'PostController@show')->name('post.show');
    Route::get('/search', 'PostController@search')->name('post.search');
    Route::post('/result', 'PostController@result')->name('post.result');
});