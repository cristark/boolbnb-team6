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



Route::get('/contact', 'HomeController@contatto')->name('guest.message.create');

                                                        //rotta per il form action del file create.blade.php
Route::post('/contatti', 'HomeController@sendcontact')->name('guest.message.sent');
//rotta per esito messaggio
Route::get('/inviato', 'HomeController@messaggioInviato')->name('validation');



//rotta guest index
Route::get('/apartment', 'ApartmentController@index')->name('guest.apartment.index');
//rotta guest show
Route::get('/apartment/{slug}', 'ApartmentController@show')->name('guest.apartment.show');
//Route::resource( '/apartment', 'ApartmentController');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth')
    ->group(function () {
        Route::resource( '/apartment', 'ApartmentController');
        Route::get('/', 'HomeController@index')->name('home');
    });
