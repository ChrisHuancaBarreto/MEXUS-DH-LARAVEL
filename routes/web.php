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


Route::get('productos','productController@index')->name('product.index');

Route::get('/productos/crear','productController@create')->name('product.create');

Route::get('/productos/{producto}/editar','productController@edit')->name('product.edit');

Route::post('productos','productController@store')->name('product.store');

Route::get('/productos/{id}','productController@show')->name('product.show');


Auth::routes();
