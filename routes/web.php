<?php

use App\Http\Controllers\LicenseController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('users/search', [UserController::class, 'search'])->name('users.search');

    Route::resource('users', UserController::class);
    Route::resource('memberships', MembershipController::class);
    Route::resource('licenses', LicenseController::class);

});
