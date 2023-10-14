<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessagesController;

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
Route::get('/', [MessagesController::class, 'index']);

// 参照
Route::get('messages', [MessagesController::class, 'index'])->name('messages.index');
Route::get('messages/create', [MessagesController::class, 'create'])->name('messages.create');
Route::get('messages/{id}/edit', [MessagesController::class, 'edit'])->name('messages.edit');

// CRUD
Route::get('messages/{id}', [MessagesController::class, 'show'])->name('messages.show');
Route::post('messages', [MessagesController::class, 'store'])->name('messages.store');
Route::put('messages/{id}', [MessagesController::class, 'update']);
Route::delete('messages/{id}', [MessagesController::class, 'destroy']);