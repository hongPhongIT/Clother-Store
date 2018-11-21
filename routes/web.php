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

Route::get('/heading', function() {
    return view('layouts.heading');
});


Route::get('/products', function() {
    return view('layouts.products');
});

Route::get('/about', function() {
    return view('layouts.about');
});

Route::get('/footer', function() {
    return view('layouts.footer');
});
Route::get('/admin', function() {
    return view('admin.products.create');
});

Route::get('/order', function() {
    return view('order');
});
Route::resource('admin/products', 'AdminProductsController');
Route::resource('admin/categories', 'AdminCategoriesController', array('as' => 'admin'));

Route::resource('admin/product_photo', 'AdminProduct_photoController');

Route::get("/men/category/{id}", "ShowProductController@getProByCategory")->name('getProByCategory');

Route::post('/men', 'ShowProductController@index');
Route::get('/search', 'SearchController@search')->name('search');
Route::resource('/home', 'HomeController');
Route::resource('/', 'HomeController');
Route::resource('/detail', "ShowProductController");
Route::resource('/comment', "CommentController");
Route::get('/history/{user_id}',[
    'uses' => 'HistoryController@index',
    'as' => 'history']);

Route::get('/history/{user_id}/edit',[
    'uses' => 'HistoryController@update',
    'as' => 'history.update']);

//adding products to cart

Route::post('/customer', [
    'uses' => 'AdminUsersController@saveCustomer',
    'as' => 'customer'
]);

Route::get('/check-customer/{email}', [
    'uses' => 'AdminUsersController@checkCustomer',
    'as' => 'checkCustomer'
]);

Route::get('/edit/customer', [
    'uses' => 'AdminUsersController@editCustomer',
    'as' => 'customer.edit'
]);

Route::get('/add-to-cart/{id}', [
    'uses' => 'ShoppingCartController@getAddToCart',
    'as' => 'product.addtocart'
]);

Route::get('/deduct/{id}', [
    'uses' => 'ShoppingCartController@deductByOne',
    'as' => 'product.deductByOne'
]);

Route::get('/delete/{id}', [
    'uses' => 'ShoppingCartController@removeItem',
    'as' => 'product.removeItem'
]);

Route::get('/shopping-cart', [
    'uses' => 'ShoppingCartController@getCart',
    'as' => 'product.shoppingcart'
]);

Route::get('/checkout', [
    'uses' => 'ShoppingCartController@getCheckout',
    'as' => 'checkout.get'
]);

Route::post('/checkout', [
    'uses' => 'ShoppingCartController@postCheckout',
    'as' => 'checkout'
]);


Auth::routes();

Route::resource('/', 'HomeController');


Route::get ( '/login/{provider}', 'SocialAccountController@redirectToProvider' );
Route::get ( '/login/{provider}/callback', 'SocialAccountController@handleProviderCallback' );


Route::get('/redirect/{service}', 'SocialAccountController@redirect');

Route::get('/contact',  'ContactController@index'); 

Route::post('/contact', 'ContactController@sendMail');

Route::resource('admin/bill', 'AdminBillsController');