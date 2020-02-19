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
Route::get('/', 'FrontendController@show');
// Route::get('/laut', 'FrontendController@laut');
Route::get('makan', 'FrontendController@lihat');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::resource('ikan', 'ikanController');
    Route::resource('databarang', 'databarangController');
    Route::resource('customer', 'customerController');

    Route::resource('makanan', 'makananController');
    // Route::resource('airlaut', 'airlautController');


    // Route::get('/makanan', function () {
    //     return view('makanan');
});

Route::get('/masuk', function () {
    return view('masuk');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('logout', 'Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
