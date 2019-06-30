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
| git push -u origin masterc
*/

Route::get('/', 'TestController@welcome')->name('welcome');
Route::get('/products/{id}', 'TestController@show')->name('show');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::post('/cart', 'CartDetailController@store');


Route::middleware(['auth','admin'])->prefix('admin')->group(function() {
    Route::get('/products', 'ProductController@index')->name('adminproducts'); // lista
    Route::get('/products/create', 'ProductController@create')->name('createproducts'); // Crea
    Route::post('/products', 'ProductController@store'); // Guarda
    Route::get('/products/{id}/edit', 'ProductController@edit'); // Edita
    Route::post('/products/{id}/edit', 'ProductController@update'); // Actualiza
    Route::delete('/products/{id}', 'ProductController@destroy'); // Edita
    Route::get('/products/{id}/images/select/{image_id}', 'ImageController@select'); // Destacar Imagen
    Route::get('/products/{id}/images', 'ImageController@index'); // Muestra imagenes del prod
    Route::post('/products/{id}/images', 'ImageController@store'); // guarda imagenes del prod
    Route::delete('/products/{id}/images', 'ImageController@destroy'); // guarda imagenes del prod
    
});

/* Route::get('/admin/products', 'ProductController@index'); */
