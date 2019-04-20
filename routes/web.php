<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| git remote add origin https://github.com/sebasxl/AppShop.git
| git push -u origin master
*/

Route::get('/', 'TestController@welcome')->name('welcome');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
