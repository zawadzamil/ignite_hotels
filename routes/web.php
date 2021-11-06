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
    return view('home');
});
Route::get('welcome', function () {
    return view('welcome');
});
Route::get('services', function () {
    return view('services');
});
Route::get('booking', function () {
    return view('booking');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('registerAdmin', function () {
    return view('auth.registerAdmin');
});

Route::get('confirmBooking','App\Http\Controllers\DashboardController@confirmBooking');
Route::post('book','App\Http\Controllers\BookingController@store');
Route::get('delete_booking/{id}','App\Http\Controllers\BookingController@destroy');
Route::get('manageOrders','App\Http\Controllers\BookingController@manageOrders');

Route::get('profile','App\Http\Controllers\DashboardController@profile');


Route::post('messageSend','App\Http\Controllers\DashboardController@messageSend');
Route::get('messages','App\Http\Controllers\DashboardController@messages');


Route::get('/dashboard','App\Http\Controllers\DashboardController@index');

Route::get('logout', '\App\Http\Controllers\DashboardController@logout');
Route::post('registeranadmin', '\App\Http\Controllers\Auth\RegisteredUserController@registerAdmin');


// Hotel Routes
Route::get('addHotel','App\Http\Controllers\DashboardController@addHotel');
Route::post('addHoteltoDb','App\Http\Controllers\HotelController@store');
Route::get('seeHotels','App\Http\Controllers\HotelController@show');
Route::get('hotel/{id}','App\Http\Controllers\HotelController@showHotel')->name('hotel');


Route::get('addRoom','App\Http\Controllers\DashboardController@addRoom');
Route::post('addRoomtoDB','App\Http\Controllers\RoomController@store');
Route::get('checkAvailability','App\Http\Controllers\RoomController@checkAvailability');
Route::get('seeRoom','App\Http\Controllers\RoomController@show');

require __DIR__.'/auth.php';
