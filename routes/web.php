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

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/forms', function () {
        return view('forms.form');
    })->name('forms');

    Route::get('/tables', function () {
        return view('tables.table');
    })->name('tables');

    Route::get('/errors', function () {
        return view('errors.error-page');
    })->name('errors');
});


require __DIR__.'/auth.php';
