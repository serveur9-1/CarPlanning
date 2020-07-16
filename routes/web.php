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

Route::group(['middleware'=> 'auth'],function(){

    Route::resources([
        'souscriptions' => 'SouscriptionController',
    ]);

    Route::post('/souscription/{id}/switch/{enable}',[
        'as' => 'changeStateSuscribers',
        'uses' => 'SouscriptionController@_switch'
    ])->where('id','[0-9]+');

    Route::get('/kilometrage',[
        'as' => 'kilometrage.edit',
        'uses' => 'SouscriptionController@kilo_create'
    ]);

    Route::put('/kilometrage',[
        'as' => 'kilometrage.update',
        'uses' => 'SouscriptionController@kilo_update'
    ]);

    Route::get('/',[
        'as' => 'home',
        'uses' => 'HomeController@index'
    ]);
});

Auth::routes();
