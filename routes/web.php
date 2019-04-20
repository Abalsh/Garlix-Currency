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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/subscribe', function () {
    return view('subscribe');
});

Route::get('/currency', function () {
    return view('currency');
});

Route::get('/crypto', function () {
    return view('crypto');
});


Route::get('/contact', 'SendEmailController@index');

Route::post('/contact/send', 'SendEmailController@send');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/subscribe', 'NewsLetterController@index');

Route::post('/subscribe/newsletter', 'NewsLetterController@store');
