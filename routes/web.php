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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::prefix('customer')->group(function () {
    Route::get('index', function () {
        return view('Layout.Customer.index');
    })->name('customerIndex');

    Route::get('indexvg', function() {
        return view('Layout.Customer.indexvg');
    })->name('customerIndexvg');

    Route::get('freelistvg', function() {
        return view('Layout.Customer.freelistvg');
    })->name('customerFreelistvg');

    Route::get('freelistvg', function() {
        return view('Layout.Customer.freelistvg');
    })->name('customerFreelistvg');

    Route::get('status', function() {
        return view('Layout.Customer.status');
    })->name('customerStatus');
});


Route::prefix('calendar')->group(function () {
    Route::get('index', function () {
        return view('Layout.Calendar.index');
    })->name('calendarIndex');

    Route::get('add', function () {
        return view('Layout.Calendar.add');
    })->name('calendarAdd');

    Route::get('personalview', function () {
        return view('Layout.Calendar.personalview');
    })->name('calendarPersonalview');
});


Route::prefix('activity')->group(function () {
    Route::get('index', function () {
        return view('Layout.Activity.index');
    })->name('activityIndex');

    Route::get('indexvg', function () {
        return view('Layout.Activity.indexvg');
    })->name('activityIndexvg');
});


Route::prefix('activity')->group(function () {
    Route::get('index', function () {
        return view('Layout.Activity.index');
    })->name('activityIndex');
});
