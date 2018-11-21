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

Route::get('/heading', function(){
    return view('layouts.heading');
    
});

Route::get('/home', function(){
    return view('home');   
});

Route::get('/products', function(){
    return view('layouts.products');   
});

Route::get('/about', function(){
    return view('layouts.about');   
});
Route::get('/contact', function(){
    return view('layouts.contact');   
});

Route::get('/footer', function(){
    return view('layouts.footer');
    
});
Route::get('/admin', function(){
    return view('admin.products.create');
    
});


Route::get('/order', function(){
    return view('order');
    
});
Route::resource('admin/products','AdminProductsController');
Route::resource('admin/categories', 'AdminCategoriesController', array('as' => 'admin'));

Route::resource('admin/product_photo','AdminProduct_photoController');


Route::post('/men','ShowProductController@index');
Route::get('/search', 'HomeController@search')->name('user.search');

Route::get('/details', function(){
    return view('layouts.details');   
});

Route::post('addComment',"UserProductsController@addComment")->name('user.product.addComment');
Route::post('commentCreate/{id}',"UserProductsController@showFormComment");
Route::resource('detail',"UserProductsController");
Auth::routes();
