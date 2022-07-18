<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

// private routes
Route::middleware(['auth', 'verified'])->name('private.')->group(function () {
    // route name => private.dashboard
    Route::get('/private/dashboard', function () {
        return view('private/dashboard');
    })->name('dashboard');

    // route name => private.user-update-password
    Route::get('/private/update-password', function () {
        return view('auth/update-password');
    })->name('user-update-password');
});
