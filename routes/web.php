<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;



Route::get('/', [Homecontroller::class, 'index']);
Route::get('/redirect', [HomeController::class, 'redirect'])
->middleware('auth', 'verified');

 

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
