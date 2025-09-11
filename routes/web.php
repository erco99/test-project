<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\Actions\ButtonController;

Route::get('/', function () {
    return Inertia::render('auth/Login');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::post('button-click', [ButtonController::class, 'increment'])
    ->middleware('auth')
    ->name('button.click');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
