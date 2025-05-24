<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('event/{slug}', [EventController::class, 'show'])->name('event.show')->name('event.show');

Route::get('event', [EventController::class, 'index'])->name('event.index');
