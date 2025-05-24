<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// ROute for login and register
Route::get('login', [\App\Http\Controllers\UserController::class, 'ShowLogin'])->name('login');
Route::post('login', [\App\Http\Controllers\UserController::class, 'login'])->name('login.authenticate');
Route::get('register', [\App\Http\Controllers\UserController::class, 'ShowRegister'])->name('register');
Route::post('register', [\App\Http\Controllers\UserController::class, 'register'])->name('register.store');
Route::post('logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('logout');

Route::get('event', [EventController::class, 'index'])->name('event.index');
Route::get('event/create', [EventController::class, 'create'])->name('event.create');
Route::get('event/edit', [EventController::class, 'edit'])->name('event.edit');
Route::get('event/{slug}', [EventController::class, 'show'])->name('event.show');

// Tambahkan middleware autentikasi pada route event
    Route::post('event/create', [EventController::class, 'store'])->name('event.store');

