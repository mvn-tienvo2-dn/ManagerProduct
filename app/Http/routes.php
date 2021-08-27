<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
        Route::group(['prefix'=>'product'],function(){
        Route::get('/','ProductsController@index');
        Route::get('add','ProductsController@create');
        Route::post('add','ProductsController@store');
 		});