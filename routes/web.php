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
Route::get('/', 'MessagesController@index');

// 参照
Route::get('messages', 'MessagesController@index')->name('messages.index');
Route::get('messages/create', 'MessagesController@create')->name('messages.create');
Route::get('messages/{id}/edit', 'MessagesController@edit')->name('messages.edit');

// CRUD
Route::get('messages/{id}', 'MessagesController@show');
Route::post('messages', 'MessagesController@store');
Route::put('messages/{id}', 'MessagesController@update');
Route::delete('messages/{id}', 'MessagesController@destroy');