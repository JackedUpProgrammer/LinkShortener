<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

// Auth
Auth::routes();

// home
Route::get('/home', [HomeController::class, 'index'])->name('home');
