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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function () {
    return view('layouts.backend');
});

// Route::get('dashboardfrontend', function () {
//     return view('dashboardfrontend');
// });

// Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

Route::resource('ikan', 'ikanController');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/blank', function () {
    return view('blank');
});

Route::get('/ikan-koi', function () {
    return view('ikan-koi');
});

Route::get('logout', 'Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
