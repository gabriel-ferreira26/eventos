<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::controller(EventController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('/events/create', 'create');
    Route::post('/events','store');
});

// Route::get('/', [EventController::class, 'index']);
// Route::get('/events/create', [EventController::class, 'create']);
// Route::post('/events', [EventController::class], 'store');

Route::get('/contato', [ContactController::class, 'create']);
