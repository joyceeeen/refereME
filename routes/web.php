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



Route::middleware(['auth','admin'])->group(function(){
  Route::get('/admin', 'UserController@admin');
  Route::post('/delete', 'UserController@delete')->name('delete');
});


Auth::routes(['verify' => true]);


Route::group(['middleware'=>['auth','verified']],function(){

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

  Route::get('/search/hospital','SearchController@hospital')->name('search.hospital');
  Route::get('/search/doctor', 'SearchController@doctor')->name('search.doctor');
  Route::get('/search/{id}', 'SearchController@details')->name('search.info');


  Route::resource('report-forms','ReferralReportsController');
  Route::resource('disease','DiseasesController');

  Route::get('report-referral-requests', 'ReferralsController@requests')->name('referral.requests');
  Route::get('report-my-referrals', 'ReferralsController@referrals')->name('my.referrals');

  Route::resource('patient', 'PatientController');

  Route::get('/', 'HomeController@index')->name('home');
  Route::get('/refer/details','ReferralsController@modalDetails');

  Route::resource('refer','ReferralsController');
  Route::resource('hospital','HospitalDetailsController');
  Route::resource('attachment','AttachmentsController');

  Route::resource('user','UserController');
  Route::resource('schedule','ScheduleController');

});
