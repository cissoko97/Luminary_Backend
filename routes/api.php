<?php

use Illuminate\Http\Request;

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

Route::get('luminars/{id}', 'LuminarController@show')->where('id', '[0-9]+');
Route::get('luminars','luminarController@index');
Route::put('luminars/{id}', 'LuminarController@update')->where('id', '[0-9]+');
Route::post('luminars', 'LuminarController@store');
Route::delete('luminars/{id}', 'LuminarController@destroy');