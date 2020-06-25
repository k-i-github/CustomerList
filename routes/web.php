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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
  Route::get('customer/menu', 'Admin\CustomerController@menu');
  //顧客ページ
  Route::get('customer/create', 'Admin\CustomerController@add');
  Route::post('customer/create', 'Admin\CustomerController@create');

  Route::get('customer/index', 'Admin\CustomerController@index');

  Route::get('customer/show', 'Admin\CustomerController@show');

  Route::get('customer/edit', 'Admin\CustomerController@edit');
  Route::post('customer/edit', 'Admin\CustomerController@update');

  //リストページ
  Route::get('customer/ListCreate', 'Admin\CustomerController@li_add');
  Route::post('customer/ListCreate', 'Admin\CustomerController@li_create');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
