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
// Route::get('/', function () {
//     return view('navbar');
// });
// routes/web.php
Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('layouts.dashboard');
});
Route::get('/analytics', function () {
    return view('layouts.analytics');
});
Route::get('/monitering', function () {
    return view('layouts.monitering');
});
Route::get('/flag', function () {
    return view('layouts.flag');
});
