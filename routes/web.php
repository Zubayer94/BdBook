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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/products', 'PagesController@products')->name('products');
Route::get('/showproduct{id}', 'PagesController@showproduct')->name('showproducts');

Route::get('/newsfeed', 'PagesController@newsfeed')->name('newsfeed');
Route::post('/newsfeed', 'PagesController@newsfeed_store')->middleware('auth');
Route::get('/newsfeed/edit{id}', 'PagesController@newsfeed_edit')->name('newsfeed.edit');
Route::post('/newsfeed/edit{id}', 'PagesController@newsfeed_update')->name('newsfeed.update')->middleware('auth');
Route::post('/newsfeed/delete{id}', 'PagesController@newsfeed_delete')->name('newsfeed.delete')->middleware('auth');
Route::get('/newsfeed/show{id}', 'PagesController@newsfeed_show')->name('newsfeed.show')->middleware('auth');
Route::post('/comment', 'PagesController@post_comment')->middleware('auth');

Route::get('admin/','AdminPagesController@index')->name('admin.index');
Route::get('admin/products','AdminPagesController@manage_products')->name('admin.products');
Route::get('admin/product/edit/{id}','AdminPagesController@product_edit')->name('admin.product.edit');
Route::get('admin/product/create','AdminPagesController@product_create')->name('admin.product.create');
Route::post('admin/product/create','AdminPagesController@product_store')->name('admin.product.store');
Route::post('admin/product/edit/{id}','AdminPagesController@product_update')->name('admin.product.update');
Route::post('admin/product/delete/{id}','AdminPagesController@product_delete')->name('admin.product.delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
