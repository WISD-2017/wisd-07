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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/aa/a1', function () {
   return view('aa.a1');
});
<<<<<<< HEAD
Route::get('/search/searchend', function () {
    return view('search.searchend');
});
Route::get('/search/searchpost', function () {
    return view('search.searchpost');
});
=======

Route::get('/booking/bookingsearch', function () {
    return view('bookingsearch');
});
Route::get('/booking/bookingcancel', function () {
    return view('bookingcancel');
});

Route::get('/booking/test', function () {
      return view('test');
 });
>>>>>>> 8c1b56fcfb18baae2386d5dbec51ba5e4a31c8a9
