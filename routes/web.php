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

// Customer Pages

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


Route::get('/booking', [
	'uses' => 'BookingController@getBookingForm',
    'as' => 'BookingPage'
]);

Route::post('/booking', [
		'uses' => 'BookingController@bookingRoom',
		'as' => 'bookingRoom'
]);


Route::get('/contact', [
	'uses' => 'ContactController@getContactForm',
    'as' => 'ContactPage'
]);

Route::post('/contact', [
		'uses' => 'ContactController@submitFeedback',
		'as' => 'submitFeedback'
]);



// Admin Pages

Route::group([
	'prefix' => 'admin',
	'middleware' => ['auth:admin', 'verified']

], function() {

	Route::get('/bookings', [
		'uses' => 'BookingController@getBooking',
		'as' => 'adminIndex'
	]);

	Route::get('/feedbacks', [
		'uses' => 'ContactController@getContact',
		'as' => 'adminFeedbacks'
	]);


	Route::get('/', [
		'uses' => 'AdminController@index',
		'as' => 'adminDashboard'
	]);
});


Route::get('/admin/login', [
	'uses' => 'Auth\AdminLoginController@showLoginForm',
	'as' => 'adminLogin'
]);

Route::post('/admin/login', [
	'uses' => 'Auth\AdminLoginController@login',
	'as' => 'adminLoginSubmit'
]);


Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');


