<?php

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

Route::group(['prefix' => 'accounting', 'middleware' => ['auth']], function(){
    Route::prefix('transaction')->group(function(){
        Route::get('/','TransactionController@index')->name('get.accounting.transaction.index');

        Route::get('/myindex','TransactionController@myindex')->name('get.accounting.transaction.myindex');

        Route::get('/exportExcel/{type}','TransactionController@exportExcel')->name('get.accounting.transaction.exportExcel');

        Route::get('/create/payment','TransactionController@createPayment')->name('get.accounting.transaction.create_payment');

        Route::get('/create/reciever','TransactionController@createReciever')->name('get.accounting.transaction.create_reciever');

        Route::post('/store','TransactionController@store')->name('post.accounting.transaction.store');

        Route::get('/detail/{id}','TransactionController@detail')->name('get.accounting.transaction.detail');

        Route::get('/edit/{id}','TransactionController@edit')->name('get.accounting.transaction.edit');
        
        Route::post('/update','TransactionController@update')->name('post.accounting.transaction.update');

        Route::get('/preview/{file}',function ($file) {
            return view('accounting::pages.transaction.preview',compact('file'));
        })->name('get.accounting.transaction.preview');

        Route::get('/filter','TransactionController@filter')->name('get.accounting.transaction.filter');
    });

    Route::prefix('account')->group(function(){
        Route::get('/','AccountController@index')->name('get.accounting.account.index');

        Route::get('/create','AccountController@create')->name('get.accounting.account.create');

        Route::post('/store','AccountController@store')->name('post.accounting.account.store');

        Route::get('/edit/{id}','AccountController@edit')->name('get.accounting.account.edit');

        Route::post('/update','AccountController@update')->name('post.accounting.account.update');

        Route::get('/filter','AccountController@filter')->name('get.accounting.account.filter');

        Route::post('/destroy','AccountController@destroy')->name('post.accounting.account.destroy');

    });

    Route::prefix('report')->group(function(){
        Route::get('/','CategoryController@index')->name('get.accounting.category.index');

        Route::get('/create','CategoryController@create')->name('get.accounting.category.create');

        Route::post('/store','CategoryController@store')->name('post.accounting.category.store');

        Route::get('/edit/{id}','CategoryController@edit')->name('get.accounting.category.edit');

        Route::post('/update','CategoryController@update')->name('post.accounting.category.update');

        Route::get('/filter','CategoryController@filter')->name('get.accounting.category.filter');

        Route::post('/destroy','CategoryController@destroy')->name('post.accounting.category.destroy');

    });

    Route::prefix('report')->group(function(){
        Route::get('/account','ReportController@reportAccount')->name('get.accounting.report.account');

        Route::get('/created','ReportController@reportCategoryByCreated')->name('get.accounting.report.categoryByCreated');

        Route::get('/category','ReportController@reportCategory')->name('get.accounting.report.category');

        Route::get('/category/filter','ReportController@filterCategory')->name('get.accounting.report.filter.category');
    });
});
