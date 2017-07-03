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
    return view('index');
});

Route::get('contacts/{id}', 'ContactsController@show');
Route::post('users', 'UsersController@store');
Route::get('user/{id}', 'UsersController@show');
Route::delete('contact/delete/{id}', 'UsersController@destroy');