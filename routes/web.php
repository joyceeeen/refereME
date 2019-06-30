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
Route::get('/search/hospital','SearchController@hospital')->name('search.hospital');
Route::get('/search/doctor', 'SearchController@doctor')->name('search.doctor');
Route::get('/search/{id}', 'SearchController@details')->name('search.info');

Route::get('refer', function () {
    return view('refer');
});

Route::get('editProfile', function () {
    return view('editProfile');
});

Route::get('changePassword', function () {
    return view('changePassword');
});

Route::get('schedule', function () {
    return view('schedule');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>'auth'],function(){

  Route::resource('refer','ReferralsController');

  Route::resource('user','UserController');
  Route::resource('schedule','ScheduleController');

});
