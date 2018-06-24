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



Route::get('/customers','CustomerController@index');//PASS
Route::get('/customers/{customer}','CustomerController@show');//PASS
Route::get('/register/customer','CustomerController@create');// PASS
Route::post('/customers/post','CustomerController@store');// PASS

Route::get('/customers/{customer}/edit','CustomerController@edit');
Route::put('/customers/{customer}','CustomerController@update' );
Route::delete('/customers/{customer}','CustomerController@destroy');

// Route::get('/project','')
Route::get('/claims','ClaimController@index');// PASS
Route::get('/claims/{claim}','ClaimController@show'); // 

Route::get('/register/claims/{customer}','ClaimController@create');// PASS
Route::get('/register/claims/{customer}/cost-work','CostWorkController@index');// PASS
Route::get('/register/claims/{customer}/cost-material','CostMaterialController@index');// PASS

Route::get('/register/claims/{customer}/image', 'ImageController@index'); //PASS
Route::get('/image/{customer}/show', 'ImageController@show');

Route::post('/claims/post','ClaimController@store');
Route::get('/claims/{claim}/edit','ClaimController@edit');
Route::put('/claims/{claim}','ClaimController@update' );
Route::delete('/claims/{claim}','ClaimController@destroy');

// Route::get('/claims/{claim}/information','Information@show');
Route::post('/claims/costWork/post','CostWorkController@store');
Route::post('/claims/costMaterial/post','CostMaterialController@store');



Route::get('/', 'ClaimController@index'); //PASS
// Route::get('/kuy/{kuy}', 'CostWorkController@index'); //PASS
	



// Route::get('/', function () {
//     return view('homepage.index');
// });

