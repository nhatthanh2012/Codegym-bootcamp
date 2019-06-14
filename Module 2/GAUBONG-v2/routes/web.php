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
    return view('admin/layouts/master');
}); 
// giao dien nguoi dung
Route::get('/index', 'PageController@getIndex')->name('page.home');
Route::get('/product-type/{type}', 'PageController@getProductType')->name('page.productType');
Route::get('/product-detail/{type}', 'PageController@getProductDetail')->name('page.productDetail');
Route::get('/contact', 'PageController@getContact')->name('page.contact');
Route::get('/introduction', 'PageController@getIntroduction')->name('page.introduction');
Route::get('/add-to-cart/{id}', 'PageController@getAddCart')->name('addCart');
Route::get('/shopping-cart', 'PageController@getShoppingCart')->name('shoppingCart');
Route::get('/del-item-cart/{id}', 'PageController@getDeleteItem')->name('deleteItem');
Route::get('/order', 'PageController@getCheckout')->name('getCheckout');
Route::post('/order', 'PageController@postCheckout')->name('postCheckout');
Route::get('/registerUser', 'PageController@register')->name('registerUser');
Route::post('/registerUser', 'PageController@postRegister')->name('postRegisterUser');
Route::get('/login', 'PageController@login')->name('login');
Route::post('/login', 'PageController@postLogin')->name('postlogin');
Route::get('/logout', 'PageController@logout')->name('logout');
Route::get('/search', 'PageController@search')->name('search');
Route::get('/complete', 'PageController@complete')->name('complete');
Route::post('/comment/{id}', 'PageController@postComment')->name('postComment');

Route::group(['prefix' => 'admin', 'middleware'=>'adminLogin'], function () {
    // product
    Route::get('/', 'BackendController@showProduct')->name('showProduct');
    Route::get('create-product', 'BackendController@createProduct')->name('createProduct');
    Route::post('post-product', 'BackendController@postProduct')->name('postProduct');
    Route::get('edit-product/{id}', 'BackendController@editProduct')->name('editProduct');
    Route::post('update-product/{id}', 'BackendController@updateProduct')->name('updateProduct');
    Route::get('delete-product/{id}', 'BackendController@deleteProduct')->name('deleteProduct');
    Route::get('search-product', 'BackendController@searchProduct')->name('searchProduct');
    Route::get('filterByType', 'BackendController@filterByType')->name('filterByType');

    // category
    Route::get('show-category', 'BackendController@showCategory')->name('showCategory');
    Route::get('create-category', 'BackendController@createCategory')->name('createCategory');
    Route::post('post-category', 'BackendController@postCategory')->name('postCategory');
    Route::get('edit-category/{id}', 'BackendController@editCategory')->name('editCategory');
    Route::post('update-category/{id}', 'BackendController@updateCategory')->name('updateCategory');
    Route::get('delete-category/{id}', 'BackendController@deleteCategory')->name('deleteCategory');

    // user
    Route::get('show-user', 'BackendController@showUser')->name('showUser');
    Route::get('create-user', 'BackendController@createUser')->name('createUser');
    Route::post('store-user', 'BackendController@storeUser')->name('storeUser');
    Route::get('edit-user/{id}', 'BackendController@editUser')->name('editUser');
    Route::post('update-user/{id}', 'BackendController@updateUser')->name('updateUser');
    Route::get('delete-user/{id}', 'BackendController@deleteUser')->name('deleteUser');

    //slide ảnh
    Route::get('show-slide', 'BackendController@showSlide')->name('showSlide');
    Route::get('create-slide', 'BackendController@createSlide')->name('createSlide');
    Route::post('store-slide', 'BackendController@storeSlide')->name('storeSlide');
    Route::get('edit-slide/{id}', 'BackendController@editSlide')->name('editSlide');
    Route::post('update-slide/{id}', 'BackendController@updateSlide')->name('updateSlide');
    Route::get('delete-slide/{id}', 'BackendController@deleteSlide')->name('deleteSlide');

    // thông tin đơn hàng
    Route::get('show-order', 'BackendController@showOrder')->name('showOrder');
    Route::get('show-detail/{idBill}', 'BackendController@showDetail')->name('showDetail');
    // Route::get('create-order', 'BackendController@createOrder')->name('createOrder');
    // Route::post('store-order', 'BackendController@storeOrder')->name('storeOrder');
    // Route::get('edit-order/{id}', 'BackendController@editOrder')->name('editOrder');
    // Route::post('update-order/{id}', 'BackendController@updateOrder')->name('updateOrder');
    // Route::get('delete-order/{id}', 'BackendController@deleteOrder')->name('deleteOrder');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


