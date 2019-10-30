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

Route::view('add','add');
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('supplier','SupplierController');
Route::post('supplier','SupplierController@store');

Route::resource('pharmacist','PharmacistController');
Route::post('pharmacist','PharmacistController@store');

Route::get('/order', 'SupplierController@order')->name('order');
