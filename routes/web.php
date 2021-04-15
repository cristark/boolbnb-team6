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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('index');

//rotta guest index
Route::get('/apartment', 'ApartmentController@index')->name('guest.apartment.index');
//rotta guest show
Route::get('/apartment/{slug}', 'ApartmentController@show')->name('guest.apartment.show');

Route::get('/contact/{slug}', 'HomeController@contatto')->name('guest.message.create');
//rotta per il form action del file create.blade.php
Route::get('/contact', 'HomeController@sendMessage')->name('guest.message.sent');
//rotta per esito messaggio
Route::get('/inviato', 'HomeController@messaggioInviato')->name('validation');

Auth::routes();

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth')
    ->group(function () {
        Route::resource( '/apartment', 'ApartmentController');
        Route::resource( '/message', 'MessageController');
        Route::resource('/statistic', 'ViewController');
        Route::get('/', 'HomeController@index')->name('home');

    });
