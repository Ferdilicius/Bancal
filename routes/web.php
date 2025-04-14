<?php

use App\Livewire\UseManager;
use Illuminate\Support\Facades\Route;

Route::get('/usuario', UseManager::class);

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
