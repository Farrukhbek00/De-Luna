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

Route::get('/', [
    'uses' => 'HotelController@getHotel',
    'as' => 'homeIndex'
]);



Route::group([
	'prefix' => 'admin'

], function() {

	// Route::get('/', [
	// 	'uses' => 'HotelController@getAdminHotel',
	// 	'as' => 'adminIndex'
	// ]);

	Route::get('/login', [
		'uses' => 'Auth\AdminLoginController@showLoginForm',
		'as' => 'adminLogin'
	]);

	Route::post('/login', [
		'uses' => 'Auth\AdminLoginController@login',
		'as' => 'adminLoginSubmit'
	]);

	Route::get('/', [
		'uses' => 'AdminController@index',
		'as' => 'adminDashboard'
	]);
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

