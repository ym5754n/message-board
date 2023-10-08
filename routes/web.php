<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// root
Route::get('/', 'MessageController@index');

// 参照
Route::get('messages', 'MessageController@index')->name('messages.index');
Route::get('messages/create', 'MessageController@create')->name('messages.create');
Route::get('message/{id}/edit', 'MessageController@edit')->name('messages.edit');

// CRUD
Route::get('messages/{id}', 'MessageController@show');
Route::post('messages', 'MessageController@store');
Route::put('messages/{id}', 'MessageController@update');
Route::delete('messages/{id}', 'MessageController@destroy');