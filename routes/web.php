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

Route::get('/invoices', function () {
    return view('invoices');
});

Route::get('/customers', function () {
    return view('customers');
});

Route::get('/equipment', function () {
    return view('equipment');
});

Route::get('/manufacturers', function () {
    return view('manufacturers');
});

Route::get('/notes', function () {
    return view('notes');
});

Route::fallback(function () {
    return view('error');
 });

Route::get('/db-test', function () {
    try {         
         echo \DB::connection()->getDatabaseName();     
    } catch (\Exception $e) {
          echo 'None';
    }
});

Route::get('/db-migrate', function() {
    Artisan::call('migrate');
    echo Artisan::output();
});

URL::forceScheme('https');
