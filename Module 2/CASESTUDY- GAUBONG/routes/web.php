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
// giao dien nguoi dung
Route::get('/index', 'PageController@getIndex')->name('page.home');
Route::get('/product-type/{type}', 'PageController@getProductType')->name('page.productType');
Route::get('/product-detail/{type}', 'PageController@getProductDetail')->name('page.productDetail');
Route::get('/contact', 'PageController@getContact')->name('page.contact');
Route::get('/introduction', 'PageController@getIntroduction')->name('page.introduction');
Route::get('/add-to-cart/{id}', 'PageController@getAddCart')->name('addCart')->middleware('auth');
Route::get('/del-item-cart/{id}', 'PageController@getDeleteItem')->name('deleteItem');
Route::get('/order', 'PageController@getCheckout')->name('getCheckout');
Route::post('/order', 'PageController@postCheckout')->name('postCheckout');
Route::get('/register', 'PageController@register')->name('register');
Route::post('/register', 'PageController@postRegister')->name('postRegister');
Route::get('/login', 'PageController@login')->name('login');
Route::post('/login', 'PageController@postLogin')->name('postlogin');
Route::get('/logout', 'PageController@logout')->name('logout');
Route::get('/search', 'PageController@search')->name('search');

Route::group(['prefix' => 'admin'], function () {
    // product
    Route::get('show-product', 'BackendController@showProduct')->name('showProduct');
    Route::get('create-product', 'BackendController@createProduct')->name('createProduct');
    Route::post('post-product', 'BackendController@postProduct')->name('postProduct');
    Route::get('edit-product/{id}', 'BackendController@editProduct')->name('editProduct');
    Route::post('update-product/{id}', 'BackendController@updateProduct')->name('updateProduct');
    Route::get('delete-product/{id}', 'BackendController@deleteProduct')->name('deleteProduct');

    // category
    Route::get('show-category', 'BackendController@showCategory')->name('showCategory');
    Route::get('create-category', 'BackendController@createCategory')->name('createCategory');
    Route::post('post-category', 'BackendController@postCategory')->name('postCategory');
    Route::get('edit-category/{id}', 'BackendController@editCategory')->name('editCategory');
    Route::post('update-category/{id}', 'BackendController@updateCategory')->name('updateCategory');
    Route::get('delete-category/{id}', 'BackendController@deleteCategory')->name('deleteCategory');

    // user
    Route::get('show-user', 'BackendController@showUser')->name('showUser');
    Route::get('edit-user/{id}', 'BackendController@editUser')->name('editUser');
    Route::post('update-user/{id}', 'BackendController@updateUser')->name('updateUser');
    Route::get('delete-user/{id}', 'BackendController@deleteUser')->name('deleteUser');

});

// thông tin đơn hàng 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
