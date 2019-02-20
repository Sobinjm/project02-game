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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=> 'checkuser'], function(){
	
	Route::get('/user_profile', 'UloginController@UserProfile');
Route::get('/home', 'UloginController@home');
});

Route::resource('/user','UloginController');
Route::post('/user_login','UloginController@login');
Route::get('/user_reg', function () {
    return view('user_reg');
});
Route::get('/logout', 'UloginController@logout');
