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

Auth::routes();

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function (){
    /**
     * Route dashboard admin
     */
    Route::get('/', 'Admin\DashboardController@index')->name('dashboard.index');

    /**
     * Route User
     */
    Route::group(['prefix' => 'user'], function (){
        Route::get('/index', 'Admin\UserController@index')->name('user.index');
        Route::get('/profile', 'Admin\UserController@profile')->name('user.profile');
        Route::get('/create', 'Admin\UserController@create')->name('user.create');
        Route::post('/create', 'Admin\UserController@store')->name('user.store');
        Route::get('/update/{id?}', 'Admin\UserController@edit')->name('user.edit');
        Route::post('/update/{id?}', 'Admin\UserController@update')->name('user.update');
        Route::get('/destroy/{id?}', 'Admin\UserController@destroy')->name('user.destroy');
    });

    /**
     * Route Product
     */
    Route::group(['prefix' => 'product'], function (){
        Route::get('/index', 'Admin\ProductController@index')->name('product.index');
        Route::get('/show/{id?}', 'Admin\ProductController@show')->name('product.show');
        Route::get('/create', 'Admin\ProductController@create')->name('product.create');
        Route::post('/create', 'Admin\ProductController@store')->name('product.store');
        Route::get('/update/{id?}', 'Admin\ProductController@edit')->name('product.edit');
        Route::post('/update/{id?}', 'Admin\ProductController@update')->name('product.update');
        Route::get('/destroy/{id?}', 'Admin\ProductController@destroy')->name('product.destroy');
    });

    /**
     * Route Test Config
     */
    Route::group(['prefix' => 'config'], function (){
        Route::get('/index', 'Test\ConfigController@index')->name('config.index');
        Route::get('/show/{id?}', 'Test\ConfigController@show')->name('config.show');
        Route::get('/create', 'Test\ConfigController@create')->name('config.create');
        Route::post('/create', 'Test\ConfigController@store')->name('config.store');
        Route::get('/update/{id?}', 'Test\ConfigController@edit')->name('config.edit');
        Route::post('/update/{id?}', 'Test\ConfigController@update')->name('config.update');
        Route::get('/destroy/{id?}', 'Test\ConfigController@destroy')->name('config.destroy');
    });

    /**
     * Management Contact Admin
     */
    Route::group(['prefix' => 'contact'], function () {
        Route::get('/', 'Test\ContactController@show')->name('contact.show');
        Route::get('/destroy/{id?}', 'Test\ContactController@destroy')->name('contact.destroy');
    });
});

Route::get('/contact', 'Test\ContactController@index')->name('contact.index');
Route::post('/contact', 'Test\ContactController@store')->name('contact.store');

Route::get('/home', 'HomeController@index')->name('home');
