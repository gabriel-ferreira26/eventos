<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::controller(EventController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('/events/create', 'create')->middleware('auth');
    Route::get('/events/{id}', 'show');
    Route::post('/events','store');
});

Route::controller(ContactController::class)->group(function(){
    Route::get('/contato', 'index');
});

// Route::get('/', [EventController::class, 'index']);
// Route::get('/events/create', [EventController::class, 'create']);
// Route::post('/events', [EventController::class], 'store');

// Route::get('/contato', [ContactController::class, 'create']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
