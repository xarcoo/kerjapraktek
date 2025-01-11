<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('page1');
});

Route::get('/tentangkami', function () {
    return view('page2');
});

Route::get('/home-en', function () {
    return view('page1en');
});

Route::get('/about-us', function () {
    return view('page2en');
});

Route::get('/login', function () {
    return view('auth/login');
});

Route::middleware(['auth'])->group(function () {
    Route::view('admin');
});
