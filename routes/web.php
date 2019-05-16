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
Route::get('',function(){
    $name= 'CISSOKO';
    return view('welcome' , compact('name'));
});
Route::post('luminars', 'LuminarController@store');
Route::get('luminars/{luminar}', 'LuminarController@show');
Route::put('luminars/{luminar}/edit', 'LuminarController@update');
Route::delete('luminars/{luminar}', 'LuminarController@destroy');
