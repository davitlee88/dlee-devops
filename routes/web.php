<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard', [
        'data' => User::all()
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');


Route::prefix('app')->name('app.')->middleware(['auth'])->group( function () {
    Route::resource('users', UserController::class);
});



require __DIR__.'/auth.php';
