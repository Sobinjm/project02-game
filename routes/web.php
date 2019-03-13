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

// Route::get('/', function () {
//     $poster['poster']=weeklymatch::all();
//     return view('welcome');
// });

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


Auth::routes(['verify' => true]);


Route::get('/', 'AdminController@welcome');
Route::post('/admin/login', 'AdminController@login');
Route::get('/admin/logout', 'AdminController@logout');

Route::resource('/weeklymatch', 'weeklymatchController');
Route::get('/addmatch', 'weeklymatchController@addmatch');
Route::get('/weekshow', 'weeklymatchController@weekshow');
Route::get('/delete/{id}', 'weeklymatchController@delete');
Route::get('/match_edit/{id}', 'weeklymatchController@matchedit');
Route::get('/match/details/{id}', 'weeklymatchController@matchdetails');
Route::get('/image/delete/1/{galleryId}', 'weeklymatchController@imagedelete1');
Route::get('/image/delete/2/{galleryId}', 'weeklymatchController@imagedelete2');
Route::get('/active/{id}', 'weeklymatchController@activestatus');
Route::post('/weeklymatch/update/{id}', 'weeklymatchController@matchupdate');


Route::get('/match-details/{id}', 'HomeController@matchdetails');
Route::get('/enroll_now/{id}/{uid}', 'HomeController@enrollnow');
Route::get('/mob_verify/{id}',  'smsController@mobverify');
Route::post('/mob_verify',  'smsController@mob_verify');
Route::post('/match_register',  'HomeController@match_register');


Route::get('/profile', 'HomeController@profile');
Route::get('/logout', 'HomeController@logout');
Route::get('/admin', 'AdminController@index');
Route::post('/user/update', 'HomeController@userupdate' );
Route::get('/user-settings',function(){
    return view('auth.usersetting');
});


Route::post('/enroll', 'enrollController@enrollnow');
Route::post('/paytm-callback', 'enrollController@paytmCallback');

Route::get('event-registration', 'enrollController@register');
Route::post('payment', 'enrollController@order');
Route::get('/transaction-status/{orderid}','enrollController@statusCheck');
Route::post('/txn_again','enrollController@txn_again');