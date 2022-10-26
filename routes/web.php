<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::controller(EventController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('/events/create', 'create');
    Route::get('/events/{$id}', 'show');
    Route::post('/events','store');
});

// Route::get('/events/{$id}', [EventController::class,'show']);
Route::controller(ContactController::class)->group(function(){
    Route::get('/contato', 'index');
});

// Route::get('/', [EventController::class, 'index']);
// Route::get('/events/create', [EventController::class, 'create']);
// Route::post('/events', [EventController::class], 'store');

// Route::get('/contato', [ContactController::class, 'create']);
