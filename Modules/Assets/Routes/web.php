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


Route::prefix('assets')->group(function() {

    Route::prefix('category')->group(function() {
        Route::get('/', 'AssetsCategoryController@index')->name('get.asset.category.index')->middleware('auth');
    
        Route::get('/create','AssetsCategoryController@create')->name('get.asset.category.create')->middleware('auth');

        Route::post('/store','AssetsCategoryController@store')->name('post.asset.category.store')->middleware('auth');
    
        Route::get('/edit/{id}','AssetsCategoryController@edit')->name('get.asset.category.edit')->middleware('auth');

        Route::post('/update/{id}','AssetsCategoryController@update')->name('post.asset.category.update')->middleware('auth');

        Route::post('/destroy','AssetsCategoryController@destroy')->name('post.asset.category.destroy')->middleware('auth');

        Route::get('/filter','AssetsCategoryController@filter')->name('get.asset.category.filter')->middleware('auth');
    });

    Route::prefix('manage')->group(function() {
        Route::get('/', 'AssetsManageController@index')->name('get.asset.manage.index')->middleware('auth');
    
        Route::get('/create','AssetsManageController@create')->name('get.asset.manage.create')->middleware('auth');

        Route::post('/store','AssetsManageController@store')->name('post.asset.manage.store')->middleware('auth');
    
        Route::get('/edit/{id}','AssetsManageController@edit')->name('get.asset.manage.edit')->middleware('auth');

        Route::get('/filter','AssetsManageController@filter')->name('get.asset.manage.filter')->middleware('auth');

        Route::get('/exportAll/{type}','AssetsManageController@exportAll')->name('get.asset.manage.exportAll')->middleware('auth');

    });

});
