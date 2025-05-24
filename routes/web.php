<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('event', [EventController::class, 'index'])->name('event.index');
Route::get('event/create', [EventController::class, 'create'])->name('event.create');
Route::post('event/create', [EventController::class, 'store'])->name('event.store');
Route::get('event/edit', [EventController::class, 'edit'])->name('event.edit');
Route::get('event/{slug}', [EventController::class, 'show'])->name('event.show')->name('event.show');

