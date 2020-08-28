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



Route::group(['prefix' => 'document', 'middleware' => ['auth']], function(){
    Route::prefix('document')->group(function(){
        Route::get('/','DocumentController@index')->name('get.document.document.index');

        Route::get('/create','DocumentController@create')->name('get.document.document.create');

        Route::post('/store','DocumentController@store')->name('post.document.document.store');

        Route::get('/filter','DocumentController@filter')->name('get.document.document.filter');
    });

    Route::prefix('category')->group(function(){
        Route::get('/','DocumentCategoryController@index')->name('get.document.category.index');

        Route::get('/create','DocumentCategoryController@create')->name('get.document.category.create');

        Route::post('/store','DocumentCategoryController@store')->name('post.document.category.store');

        Route::get('/edit/{id}','DocumentCategoryController@edit')->name('get.document.category.edit');

        Route::get('/filter','DocumentCategoryController@filter')->name('get.document.category.filter');

        Route::post('/destroy','DocumentCategoryController@destroy')->name('post.document.category.destroy');

    });
});
