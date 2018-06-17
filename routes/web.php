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

Route::get('/customers','CustomerController@index');
Route::get('/customers/{customer}','CustomerController@show');
Route::get('/customers/create','CustomerController@createCustomer');


Route::post('/customers','CustomerController@store');
Route::get('/customers/{customer}/edit','CustomerController@edit');
Route::put('/customers/{customer}','CustomerController@update' );
Route::delete('/customers/{customer}','CustomerController@destroy');

// Route::get('/project','')
Route::get('/claims','ClaimController@index');
Route::get('/claims/{claim}','ClaimController@show');
Route::get('/claims/create','Claim@Controller@create');
Route::post('/claims','ClaimController@store');
Route::get('/claims/{claim}/edit','ClaimController@edit');
Route::put('/claims/{claim}','ClaimController@update' );
Route::delete('/claims/{claim}','ClaimController@destroy');

Route::get('/', function(){

	return view('layout.main');
});


// Route::get('/', function () {
//     return view('welcome');
// });

