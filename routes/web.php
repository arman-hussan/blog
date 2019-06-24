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

Route::get('/','PagesController@index')->name('index');



Route::get('/products','ProductController@index')->name('products');
Route::get('/product/{slug}','ProductController@show')->name('products.show');
Route::get('/search','PagesController@search')->name('search');



//admin routes
Route::group(['prefix' => 'admin'], function(){

Route::get('/','AdminController@index')->name('admin.index');


//products routes
Route::group(['prefix' => 'product'], function(){
Route::get('/','AdminProductController@index')->name('admin.products');
Route::get('/create','AdminProductController@create')->name('admin.product.create');
Route::get('/edit/{id}','AdminProductController@edit')->name('admin.product.edit');
Route::post('/create','AdminProductController@store')->name('admin.product.store');
Route::post('/edit/{id}','AdminProductController@update')->name('admin.product.update');
Route::post('/delete/{id}','AdminProductController@delete')->name('admin.product.delete');

});



//Catagory routes
Route::group(['prefix' => 'catagory'], function(){
Route::get('/','CatagoryController@index')->name('admin.catagories');
Route::get('/create','CatagoryController@create')->name('admin.catagory.create');
Route::get('/edit/{id}','CatagoryController@edit')->name('admin.catagory.edit');
Route::post('/create','CatagoryController@store')->name('admin.catagory.store');
Route::post('/edit/{id}','CatagoryController@update')->name('admin.catagory.update');
Route::post('/delete/{id}','CatagoryController@delete')->name('admin.catagory.delete');

});




});
 
 