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

  Route::get('customer/show/{id}', 'Admin\CustomerController@show');

  Route::get('customer/edit', 'Admin\CustomerController@edit');
  Route::post('customer/edit', 'Admin\CustomerController@update');

  //リストページ
  Route::get('customer/ListCreate', 'Admin\CustomerController@li_add');
  Route::post('customer/ListCreate', 'Admin\CustomerController@li_create');

  Route::get('customer/list/index', 'Admin\CustomerController@li_index');
  Route::get('customer/list/show/{id}', 'Admin\CustomerController@li_show');

  Route::get('customer/list/edit', 'Admin\CustomerController@li_edit');
  Route::post('customer/list/edit', 'Admin\CustomerController@li_update');

  Route::get('customer/delete', 'Admin\CustomerController@delete');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
