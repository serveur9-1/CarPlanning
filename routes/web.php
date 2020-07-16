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

route::get('/',[
    'as' => 'home',
    'uses' => 'HomeController@home'
]);

route::get('/suscriber',[
    'as' => 'suscriber',
    'uses' => 'SuscriberController@suscriber'
]);

route::get('/kilometrage',[
    'as' => 'kilometrage',
    'uses' => 'SuscriberController@kilometrage'
]);

route::post('/souscriptionAdd', [
    'as' => 'souscriptionAdd',
    'uses' => 'SuscriberController@souscriptionAdd'
]);

route::get('/admin',[
    'as' => 'HomeAdmin',
    'uses' => 'HomeController@suscribers'
]);

route::get('/Marques',[
    'as' => 'marques',
    'uses' => 'HomeController@marque'
]);

route::get('/suscribers',[
    'as' => 'suscribers',
    'uses' => 'HomeController@suscribers'
]);

route::get('/add_marques',[
    'as' => 'add_marques',
    'uses' => 'HomeController@add_marques'
]);


Route::post('/admin/suscribers/changeState/{id}/{enable}',[
    'as' => 'changeStateSuscr',
    'uses' => 'HomeController@changeStateSuscribers'
])->where('id','[0-9]+');

Route::post('/suscribers',[
    'as' => 'changeKilometrage',
    'uses' => 'HomeController@changeKilometrage'
])->where('id','[0-9]+');


Route::resources([
    'souscriptions' => 'SouscriptionController',
]);

Route::post('/souscription/{id}/switch/{enable}',[
    'as' => 'changeStateSuscribers',
    'uses' => 'SouscriptionController@_switch'
])->where('id','[0-9]+');

route::get('/kilo',[
    'as' => 'kilometrage.edit',
    'uses' => 'SouscriptionController@kilo_create'
]);

route::put('/kilo',[
    'as' => 'kilometrage.update',
    'uses' => 'SouscriptionController@kilo_update'
]);

Auth::routes();