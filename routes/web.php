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


// Route::group(['prefix' => 'admin'], function () {
//     Route::get('/', 'ControllerDashboards@index')->middleware('auth');
// });

Route::get('/', 'ControllerDashboards@index')->middleware('auth')->name('home');
Auth::routes(['register' => false]);
Route::resource('products', 'ControllerProducts');
