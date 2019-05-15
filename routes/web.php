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


Auth::routes(['register' => false]);
Route::post('/reservation', 'ReservationController@reserve')->name('reservation.reserve');
Route::post('/contact', 'ContactController@sendMsg')->name('contact.sent');

Route::get('/', 'HomeController@index')->name('welcome');

Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'Admin'], function () {
    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::resource('slider', 'SliderController')->except('show');
    Route::resource('category', 'CategoryController')->except('show');
    Route::resource('item', 'ItemController')->except('show');
    Route::get('reservation', 'ReservationController@index')->name('reservation.index');
    Route::post('reservation/{id}', 'ReservationController@status')->name('reservation.status');
    Route::delete('reservation/{id}', 'ReservationController@destroy')->name('reservation.destroy');

    Route::get('contact', 'ContactController@index')->name('contact.index');
    Route::get('contact/{id}', 'ContactController@show')->name('contact.show');
    Route::delete('contact/{id}', 'ContactController@destroy')->name('contact.destroy');
});
