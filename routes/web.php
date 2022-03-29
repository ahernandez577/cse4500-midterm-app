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
    return view('welcome');
});

Route::get('/units', function () {
    return view('units');
});

Route::get('/hardware', function () {
    return view('hardware');
});

Route::get('/employees', function () {
    return view('employees');
});

Route::get('/purchases', function () {
    return view('purchases');
});

Route::get('/notes', function () {
    return view('notes');
});

URL::forceScheme('https');
