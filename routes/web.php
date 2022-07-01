<?php

use Illuminate\Support\Facades\Route;

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

//Halaman Utama
Route::get('/', 'PagesController@home');
Route::get('/identitas', 'PagesController@identitas');

//Halaman Login
Route::get('/login', 'LoginController@index')->name('login')->middleware('guest');
Route::post('/login', 'LoginController@authenticate');
Route::post('/logout', 'LoginController@logout');

//Halaman Register
Route::get('/register', 'RegisterController@index')->middleware('guest');
Route::post('/register', 'RegisterController@simpan');

//Halaman Input Barang
Route::get('/barang', 'BarangController@index')->middleware('auth');
Route::get('/barang/create', 'BarangController@create')->middleware('auth');
Route::post('/barang/create', 'BarangController@store')->middleware('auth');

//Halaman Detail
Route::get('/barang/{barang}', 'BarangController@show')->middleware('auth');

//Delete Barang
Route::delete('/barang/{barang}', 'BarangController@destroy')->middleware('auth');

//Edit Barang
Route::get('/barang/{barang}/edit', 'BarangController@edit')->middleware('auth');
Route::patch('/barang/{barang}/edit', 'BarangController@update')->middleware('auth');

//Checkout
Route::get('/checkout', 'CheckoutController@index')->middleware('auth');
Route::get('/checkout/{barang}', 'CheckoutController@create')->middleware('auth');
Route::post('/checkout/create', 'CheckoutController@store')->middleware('auth');