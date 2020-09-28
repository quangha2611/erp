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

Route::group(['prefix' => 'crm', 'middleware' => ['auth','web']], function(){
    Route::prefix('/calendar')->group(function(){
        Route::get('/index','CalendarController@index')->name('get.crm.calendar.index');

        Route::get('/personal','CalendarController@personal')->name('get.crm.calendar.personal');

        Route::get('/create','CalendarController@create')->name('get.crm.calendar.create');

        Route::post('/store','CalendarController@store')->name('post.crm.calendar.store');

        Route::get('/edit/{id}','CalendarController@edit')->name('get.crm.calendar.edit');

        Route::post('/update/{id}','CalendarController@update')->name('post.crm.calendar.update');

        Route::post('/destroy','CalendarController@destroy')->name('post.crm.calendar.destroy');

        Route::get('/filter','CalendarController@filter')->name('get.crm.calendar.filter');
    });

    Route::prefix('/activity')->group(function(){
        Route::get('/index','ActivityController@index')->name('get.crm.activity.index');

        Route::get('/indexvg','ActivityController@indexvg')->name('get.crm.activity.indexvg');

        Route::get('/listcall','ActivityController@listcall')->name('get.crm.activity.listcall');

        Route::get('/yourListcall','ActivityController@yourListcall')->name('get.crm.activity.yourListcall');

        Route::get('/allListcall','ActivityController@allListcall')->name('get.crm.activity.allListcall');

        Route::get('/edit/{id}','ActivityController@edit')->name('get.crm.activity.edit');

        Route::post('/update/{id}','ActivityController@update')->name('post.crm.activity.update');

        Route::get('/addMeeting/{id}','ActivityController@addMeeting')->name('get.crm.activity.addMeting');

        Route::post('/storeMeeting','ActivityController@storeMeeting')->name('post.crm.activity.storeMeting');

        Route::get('/addCalendar/{id}','ActivityController@addCalendar')->name('get.crm.activity.addCalendar');

        Route::post('/storeCalendar','ActivityController@storeCalendar')->name('post.crm.activity.storeCalendar');

        Route::get('/addPhoneCall/{id}','ActivityController@addPhoneCall')->name('get.crm.activity.addPhoneCall');

        Route::post('/storePhoneCall','ActivityController@storePhoneCall')->name('post.crm.activity.storePhoneCall');

        Route::get('/addRequestCall/{id}','ActivityController@addRequestCall')->name('get.crm.activity.addRequestCall');

        Route::post('/storeRequestCall','ActivityController@storeRequestCall')->name('post.crm.activity.storeRequestCall');

        Route::get('/filter', 'ActivityController@filter')->name('get.crm.activity.filter');

        Route::get('/filterListCall','ActivityController@filterListCall')->name('get.crm.activity.filterListCall');

    });

    Route::prefix('/customer')->group(function(){
        Route::get('/index','CustomerController@index')->name('get.crm.customer.index');

        Route::get('/indexvg','CustomerController@indexvg')->name('get.crm.customer.indexvg');

        Route::get('/freeCustomer','CustomerController@freeCustomer')->name('get.crm.customer.freeCustomer');

        Route::get('/index/{parentLevel}','CustomerController@index2')->name('get.crm.customer.index2');
        
        Route::get('/excel','CustomerController@excel')->name('get.crm.customer.excel');

        Route::get('/filter','CustomerController@filter')->name('get.crm.customer.filter');

        Route::get('/filterCompanyResource','CustomerController@filterCompanyResource')->name('get.crm.customer.filterCompanyResource');

        Route::get('/companyResource', 'CustomerController@companyResource')->name('get.crm.customer.companyResource');

        Route::get('/companyResource/{parentLevel}', 'CustomerController@companyResource2')->name('get.crm.customer.companyResource2');

        Route::post('/destroy/{id}', 'CustomerController@destroy')->name('post.crm.customer.destroy');

        Route::get('/detail/{id}', 'CustomerController@detail')->name('get.crm.customer.detail');

        Route::get('/listDistrict', 'CustomerController@listDistrict')->name('get.crm.customer.listDistrict');

        Route::get('/infoCustomer', 'CustomerController@infoCustomer')->name('get.crm.customer.infoCustomer');
        
    });

    Route::prefix('/lead')->group(function(){
        Route::get('/add','CustomerController@add')->name('get.crm.lead.add');

        Route::post('/store','CustomerController@store')->name('post.crm.lead.store'); 

        Route::get('/search','CustomerController@search')->name('get.crm.lead.search');

        Route::get('/show','CustomerController@show')->name('get.crm.lead.show');
    });

    Route::prefix('/account')->group(function(){
        Route::get('/index','CustomerController@AccountIndex')->name('get.crm.account.index');

        Route::get('/edit/{id}', 'CustomerController@edit')->name('get.crm.account.edit');

        Route::post('/update/{id}', 'CustomerController@update')->name('post.crm.account.update');
    });

    Route::prefix('/contact')->group(function(){
        Route::get('/','ContactController@index')->name('get.crm.contact.index');

        Route::get('/add','ContactController@create')->name('get.crm.contact.add');

        Route::post('/store','ContactController@store')->name('post.crm.contact.store');

        Route::post('/destroy/{id}','ContactController@destroy')->name('post.crm.contact.destroy');

        Route::get('/edit/{id}','ContactController@edit')->name('get.crm.contact.edit');
    });

    Route::prefix('/contract')->group(function(){
        Route::post('/test','ContractController@test')->name('test');

        Route::get('/index','ContractController@index')->name('get.crm.contract.index');

        Route::get('/show/{id}','ContractController@show')->name('get.crm.contract.show');

        Route::get('/create','ContractController@create')->name('get.crm.contract.create');

        Route::post('/store','ContractController@store')->name('post.crm.contract.store');

        Route::get('/getListProductsByCompany','ContractController@getListProductsByCompany');

        Route::get('/infoProduct','ContractController@infoProduct'); 

        Route::get('/infoEmployee','ContractController@infoEmployee'); 

        Route::get('/transaction','ContractController@transaction')->name('get.crm.contract.transaction');

        Route::get('/showtransaction','ContractController@showTransaction')->name('get.crm.contract.showtransaction');
    });
});

