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

//Route::get('/feed', 'PageController@feed')->name('page.feed');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home')->middleware('notguest');

Route::get('/detail', 'PageController@detail')->name('page.detail');

Route::get('/home', 'PageController@home')->name('page.home');

Route::get('/newcompany', 'PageController@newcompany')->name('page.newcompany');

Route::get('/product', 'PageController@manageproduct')->name('page.product');

Route::get('/message', 'PageController@message')->name('page.message');

Route::resource('/company', 'CompanyController');

Route::resource('/feed', 'PostController');
