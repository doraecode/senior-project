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
Route::get('/image', 'ImageController@index');

Route::get('/customer','CustomerController@index');
Route::get('/customer/{customer}','CustomerController@show');
Route::get('/customer/create','CustomerController@create');
Route::post('/customer','CustomerController@store');
Route::get('/customer/{customer}/edit','CustomerController@edit');
Route::put('/customer/{customer}','CustomerController@update' );
Route::delete('/customer/{customer}','CustomerController@destroy');

// Route::get('/project','')
Route::get('/claims','ClaimController@index');
Route::get('/claims/{claim}','ClaimController@show');
Route::get('/claims/create','StateController@getState1_user');
Route::post('/claims','ClaimController@store');
Route::get('/claims/{claim}/edit','ClaimController@edit');
Route::put('/claims/{claim}','ClaimController@update' );
Route::delete('/claims/{claim}','ClaimController@destroy');

//
Route::get('/claims/cost-work','CostWorkController@index');
Route::get('/claims/cost-work/{claim}','CostWorkController@show');
Route::get('/claims/cost-work/create','CostWorkController@create');
Route::post('/claims/cost-work','CostWorkController@store');
Route::get('/claims/cost-work/{claim}/edit','CostWorkController@edit');
Route::put('/claims/cost-work/{claim}','CostWorkController@update' );
Route::delete('/claims/cost-work/{claim}','CostWorkController@destroy');

Route::get('/claims/cost-item','CostItemController@index');
Route::get('/claims/cost-item/{claim}','CostItemController@show');
Route::get('/claims/cost-item/create','CostItemController@create');
Route::post('/claims/cost-item','CostItemController@store');
Route::get('/claims/cost-item/{claim}/edit','CostItemController@edit');
Route::put('/claims/cost-item/{claim}','CostItemController@update' );
Route::delete('/claims/cost-item/{claim}','CostItemController@destroy');

Route::get('/claims/cost-etc','CostEtcController@index');
Route::get('/claims/cost-etc/{claim}','CostEtcController@show');
Route::get('/claims/cost-etc/create','CostEtcController@create');
Route::post('/claims/cost-etc','CostEtcController@store');
Route::get('/claims/cost-etc/{claim}/edit','CostEtcController@edit');
Route::put('/claims/cost-etc/{claim}','CostEtcController@update' );
Route::delete('/claims/cost-etc/{claim}','CostEtcController@destroy');

Route::get('/claims/picture','PictureController@index');
Route::get('/claims/picture/{claim}','PictureController@show');
Route::get('/claims/picture/create','PictureController@create');
Route::post('/claims/picture','PictureController@store');
Route::get('/claims/picture/{claim}/edit','PictureController@edit');
Route::put('/claims/picture/{claim}','PictureController@update' );
Route::delete('/claims/picture/{claim}','PictureController@destroy');

Route::get('/', function(){

	return view('layout.main');
});


// Route::get('/', function () {
//     return view('welcome');
// });

