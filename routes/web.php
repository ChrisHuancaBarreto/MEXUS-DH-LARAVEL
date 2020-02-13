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


Route::get('productos','productController@index')->name('products.index');
Route::get('/productos/crear','productController@create')->name('products.create');
Route::post('productos','productController@store')->name('products.store');
Route::get('/productos/{producto}','productController@show')->name('products.show');


Auth::routes();
