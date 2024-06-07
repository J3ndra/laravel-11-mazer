<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/security', [ProfileController::class, 'security'])->name('profile.security');

    Route::group(['prefix' => 'component', 'as' => 'component.'], function() {
        Route::get('accordion', function() {
            return view('mazer.components.accordion');
        })->name('accordion');
    });
});

require __DIR__.'/auth.php';
