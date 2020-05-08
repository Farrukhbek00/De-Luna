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

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', [
    'uses' => 'HotelController@getHotel',
    'as' => 'Index'
]);

Route::get('/rooms', [
    'uses' => 'RoomController@getRoom',
    'as' => 'Rooms'
]);

Route::get('/about', function () {
    return view('home.about');
});

Route::get('/contact', function () {
    return view('home.contact');
});

Route::get('/booking', [
	'uses' => 'BookingController@getBookingForm',
    'as' => 'BookingPage'
]);

Route::post('/booking', [
		'uses' => 'BookingController@bookingRoom',
		'as' => 'bookingRoom'
]);



Route::group([
	'prefix' => 'admin'

], function() {

	Route::get('/bookings', [
		'uses' => 'BookingController@getBooking',
		'as' => 'adminIndex'
	]);

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
// Route::get('/home', 'HomeController@index')->name('home');


