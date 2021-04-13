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


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth')
    ->group(function () {
        Route::resource( '/', 'ApartmentController');
    });
