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

Route::get('makanan', function () {
    return view('makanan');
});

Route::get('ikanlohan', function () {
    return view('ikanlohan');
});

Route::get('ikankoi', function () {
    return view('ikankoi');
});

Route::get('ikanarwana', function () {
    return view('ikanarwana');
});

Route::get('ikancupang', function () {
    return view('ikancupang');
});

Route::get('ikanmanfish', function () {
    return view('ikanmanfish');
});


Route::get('logout', 'Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
