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
        Route::get('/', 'AssetsCategoryController@index')->name('get.asset.category.index');
    
        Route::get('/create','AssetsCategoryController@create')->name('get.asset.category.create');

        Route::post('/store','AssetsCategoryController@store')->name('post.asset.category.store');
    
        Route::get('/edit/{id}','AssetsCategoryController@edit')->name('get.asset.category.edit');

        Route::post('/update/{id}','AssetsCategoryController@update')->name('post.asset.category.update');

        Route::post('/destroy/{id}','AssetsCategoryController@destroy')->name('post.asset.category.destroy');

        Route::get('/filter','AssetsCategoryController@filter')->name('get.asset.category.filter');
    });

    Route::prefix('manage')->group(function() {
        Route::get('/', 'AssetsManageController@index')->name('get.asset.manage.index');
    
        Route::get('/create','AssetsManageController@create')->name('get.asset.manage.create');

        Route::post('/store','AssetsManageController@store')->name('post.asset.manage.store');
    
        Route::get('/edit/{id}','AssetsManageController@edit')->name('get.asset.manage.edit');

        Route::get('/filter','AssetsManageController@filter')->name('get.asset.manage.filter');

    });

});
