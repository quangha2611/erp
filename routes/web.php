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
    Route::get('indexvg', function() {
        return view('Layout.Customer.indexvg');
    })->name('customerIndexvg');

    Route::get('freelistvg', function() {
        return view('Layout.Customer.freelistvg');
    })->name('customerFreelistvg');

    Route::get('freelistvg', function() {
        return view('Layout.Customer.freelistvg');
    })->name('customerFreelistvg');


    // Danh sach chung
    Route::get('index', function () {
        return view('Layout.Customer.index');
    })->name('customerIndex');

    Route::get('indexl0', function () {
        return view('Layout.Customer.indexl0');
    })->name('customerIndexL0');

    Route::get('indexl2a', function () {
        return view('Layout.Customer.indexl2a');
    })->name('customerIndexL2A');

    Route::get('indexl3', function () {
        return view('Layout.Customer.indexl3');
    })->name('customerIndexL3');

    Route::get('indexl4', function () {
        return view('Layout.Customer.indexl4');
    })->name('customerIndexL4');

    Route::get('indexl5a1', function () {
        return view('Layout.Customer.indexl5a1');
    })->name('customerIndexL5A1');

    Route::get('indexl5a2', function () {
        return view('Layout.Customer.indexl5a2');
    })->name('customerIndexL5A2');

    Route::get('indexl6a', function () {
        return view('Layout.Customer.indexl6a');
    })->name('customerIndexL6A');

    Route::get('indexl7a', function () {
        return view('Layout.Customer.indexl7a');
    })->name('customerIndexL7A');
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

    // Danh sach cuoc goi
    Route::get('listcall', function() {
        return view('Layout.Activity.listcall');
    })->name('activityListcall');

    Route::get('yourListcall', function() {
        return view('Layout.Activity.yourListcall');
    })->name('activityYourListcall');

    Route::get('allListcall', function() {
        return view('Layout.Activity.allListcall');
    })->name('activityAllListcall');

    Route::get('edit', function() {
        return view('Layout.Activity.edit');
    })->name('activityEdit');
});


Route::prefix('infomation')->group(function () {
    //Trang thai thong tin
    Route::get('opportunity/index', function () {
        return view('Layout.Infomation.Opportunity.index');
    })->name('infomationOpportunityIndex');

});


Route::prefix('lead')->group(function () {
    Route::get('search', function () {
        return view('Layout.Lead.search');
    })->name('leadSearch');

    Route::get('add', function () {
        return view('Layout.Lead.add');
    })->name('leadAdd');
});

Route::prefix('account')->group(function () {
    Route::get('index', function () {
        return view('Layout.Account.index');
    })->name('accountIndex');

    Route::get('status', function() {
        return view('Layout.Account.status');
    })->name('accountStatus');
});


Route::prefix('service')->group(function () {
    Route::get('index', function () {
        return view('Layout.Service.index');
    })->name('serviceIndex');

    Route::get('expried',function () {
        return view('Layout.Service.expried');
    })->name('serviceExpried');

    Route::get('exprieddate',function () {
        return view('Layout.Service.exprieddate');
    })->name('serviceExpriedDate');

    Route::get('indexuser',function () {
        return view('Layout.Service.indexuser');
    })->name('serviceIndexuser');
});



Route::prefix('auction')->group(function () {
    Route::get('join', function () {
        return view('Layout.Auction.join');
    })->name('auctionJoin');

    Route::get('indexuser', function () {
        return view('Layout.Auction.indexuser');
    })->name('auctionIndexuser');

    Route::get('add', function () {
        return view('Layout.Auction.add');
    })->name('auctionAdd');
});


Route::prefix('keyword')->group(function () {
    Route::get('index', function () {
        return view('Layout.Keyword.index');
    })->name('keywordIndex');
});
