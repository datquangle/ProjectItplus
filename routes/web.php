<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/link','Admin\CategoryController@link');


Route::get('/register','Admin\AdminuserController@getRegister' )
    ->name('get.register');

Route::post('/register','Admin\AdminuserController@postRegister' )
    ->name('post.register');

Route::get('/login','Admin\AdminuserController@getLogin' )
    ->name('get.login');

Route::post('/login','Admin\AdminuserController@postLogin' )
    ->name('post.login');





Route::group([
    'middleware'=>'auth',
], function (){
    Route::post('/logout','Admin\AdminuserController@logout' )
        ->name('logout');

    Route::get('/', function (){
        return view('admin.home');
    })->name('home');
});

Route::group([
    'middleware'=>'auth',
    'namespace'=>'Admin',
    'prefix'=>'category',
    'as'=>'admin.category.'
    ], function (){
        Route::get('create','CategoryController@create')->name('create');
        Route::post('store','CategoryController@store' )->name('store');
        Route::get('index','CategoryController@index' )->name('index');
        Route::get('{category}/edit','CategoryController@edit' )->name('edit');
        Route::put('{category}','CategoryController@update' )->name('update');
        Route::delete('{category}','CategoryController@destroy' )->name('destroy');
    });

////////////////////////////////////////////////////////////
Route::get('/product/create','Admin\ProductController@create' )
    ->name('admin.product.create');

Route::post('/product/store','Admin\ProductController@store' )
    ->name('admin.product.store');

Route::get('/product/index','Admin\ProductController@index' )
    ->name('admin.product.index');

Route::get('product/{product}/edit','Admin\ProductController@edit' )
    ->name('admin.product.edit');

Route::put('product/{product}','Admin\ProductController@update' )
    ->name('admin.product.update');

Route::delete('product/{product}','Admin\ProductController@destroy' )
    ->name('admin.product.destroy');

////////////////////////////////////////////////////////////////


Route::get('/admin/index','Admin\AdminuserController@index' )
    ->name('admin.adminuser.index');
Route::get('/admin/edit','Admin\AdminuserController@edit' )
    ->name('admin.adminuser.edit');
Route::get('/admin/destroy','Admin\AdminuserController@edit' )
    ->name('admin.adminuser.destroy');

Route::get('category/{slug}','Admin\CategoryController@cart' )
    ->name('admin.category.cart');

///////////////////////////////////////////////////////////

Route::get('dcsneaker/home','customer\customerController@indexhome' )
    ->name('customer.indexhome');

Route::get('dcsneaker/about','customer\customerController@indexabout' )
    ->name('customer.indexabout');

Route::get('dcsneaker/blog','customer\customerController@indexblog' )
    ->name('customer.indexblog');

Route::get('dcsneaker/contact','customer\customerController@indexcontact' )
    ->name('customer.indexcontact');

Route::get('dcsneaker/detail',function(){
    return view('customer.detail');
} );

Route::get('dcsneaker/category','customer\customerController@indexlist' )
    ->name('customer.indexlist');



Route::get('dcsneaker/product','customer\customerController@indexproduct' )
    ->name('customer.indexproduct');
Route::get('dcsneaker/checkout','customer\customerController@checkout' )
    ->name('customer.checkout');


Route::get('dcsneaker/product/{slug}','customer\customerController@detail' )
    ->name('customer.detail');

Route::get('dcsneaker/addcart/{id}','customer\customerController@addcart' )
    ->name('customer.addcart');

Route::get('dcsneaker/addcart','customer\customerController@cart' )
    ->name('customer.cart');
Route::delete('/delete.cart.product','customer\customerController@deleteProduct')
    ->name('delete.cart.product');




























