<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//ok davide
Route::get('/statistiche/{slug}', 'Api\ViewController@show');
Route::get('/statistiche', 'Api\ViewController@index');
//

//prova api map
Route::get('/map/{id}', 'Api\MapController@index');
// Route::get('/map', 'Api\MapController@index');


Route::get('/search', 'Api\SearchController@store');


Route::get('/slider' , 'Api\SliderController@index');

Route::get('/serviceList' , 'Api\ServicesList@serviziLista');

// ricerca API
Route::get('/ResultSearch' , 'Api\ResultSearch@cityApartment');

// ricerca avanzata API
Route::get('/ResultSearchAdvanced' , 'Api\ResultSearchAdvanced@filter');

Route::get('/prezzo/{slug}' , 'Api\ShowPrice@mostraPrezzo');
