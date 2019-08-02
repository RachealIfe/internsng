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

use App\User;
use App\Test;



Route::get('/user/zoom', 'ZoomController@index');

Auth::routes();
//  Auth::routes(['verify' => true]);

//Route::get('/user/company/jobscreated/{user}', 'JobController@myjobs' );
Route::get('/', function () {
  //return view('welcome', ['user' => Auth::user()]);
  if(Auth::check()) {
        return view('welcome', ['user' => Auth::user()]);
    } else {
        return view('welcome', ['user' => Auth::user()]);
    }
    //return view('welcome', ['user' => Auth::user()]);
});


Route::get('user/company/quizzes', function(){
  return view('/user/company/quizzes');
});

Route::get('user/intern/hub', function(){
  return view('/user/intern/hubhome');
});

Route::get('/user/company/{user}/applications', 'ApplicationController@applications');
Route::get('/user/{user}/companies', 'CompanyController@companies');
Route::get('/user/company/{user}/quizzes','TestController@tests');
Route::get('/user/company/{user}/createtestform', function($user){
  $user=User::findorFail($user);
  return view('/user/company/createtestform', ['user'=>$user] );
});

Route::get('/user/company/{user}/createinterviewform', function($user){
  $user=User::findorFail($user);
  return view('/user/company/createinterviewform', ['user'=>$user] );
});
Route::post('/user/company/{user}/createtest', 'TestController@create');
Route::post('/user/company/{user}/createinterview', 'InterviewController@create');

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/p/{user}', function($user){
  $user=User::findorFail($user);
  return view('/user/internprofile', ['user'=>$user,]);
});

Route::get('/user/c/{user}', function($user){
  $user=User::findorFail($user);
  return view('/user/company/profile', ['user'=>$user,]);
});

Route::get('/user/p/changeplan/{user}', 'PlanController@internindex');
Route::get('/user/c/changeplan/{user}', 'PlanController@companyindex');

//Route::get('/user/{user}/browsejobs', 'JobController@display');
//Route::get('apply/{user}/{job}', 'JobController@apply');
Route::get('/user/verify/{token}', 'VerifyTokenController@verifyUser');

Route::get('/user/c/{user}/editprofile', 'CompanyController@edit');
Route::get('/user/{user}/tests', 'TestController@fetchtests');
Route::get('/user/{user}/browsejobs', 'JobController@index');
Route::get('/user/{user}/applied', 'JobController@applied');
Route::get('apply/{user}/{job}', 'JobController@apply');
Route::get('/user/company/{user}/browseinterns', 'JobController@display');
Route::get('/user/{user}/otherinterns', 'InternController@otherinterns');
Route::get('/user/{user}/company', 'CompanyController@index');
Route::get('/user/c/interviews/{user}', 'InterviewController@fetchinterviews');
Route::get('/user/intern/changeplan/{user}/free', 'PlanController@internfreeplan');
Route::get('/user/intern/changeplan/{user}/premium', 'PlanController@internpremiumplan');
Route::get('/user/company/changeplan/{user}/free', 'PlanController@companyfreeplan');
Route::get('/user/company/changeplan/{user}/premium', 'PlanController@companypremiumplan');

Route::patch('/user/companyedit/{user}', 'CompanyController@update');
Route::get('/dashboard/{user}', 'DashboardController@index');
Route::patch('/user/{user}', 'ProfileController@update');
Route::get('/user/{user}/apply/{job}', 'JobController@apply');
Route::get('/user/{user}/editprofile', 'ProfileController@edit');
Route::get('user/internprofile/{user}', 'ProfileController@index');
Route::post('/user/company/{user}/createnewjob', 'CreateJobController@create');
Route::get('/user/{user}/company/createnewjob', 'CreateJobController@createjob');
Route::get('/user/company/{user}/jobscreated', 'JobController@myjobs');

Route::get('/user/company/{user}/addquestion/{test}', function($user,$test){
  $user=User::findorFail($user);
  $test=Test::findorFail($test);
  return view('/user/company/addquestion', compact('user','test'));
});
Route::post('/user/company/{user}/addquestion/{test}/save', 'TestController@update');
Route::get('/user/company/{user}/invitetotest/{test}', 'TestController@inviteintern');
Route::get('/user/c/{user}/viewinternprofile/{row}','ViewProfileController@internprofile');
Route::get('/user/company/{user}/select/{test}/{row}', 'TestController@select');
Route::get('/user/{user}/{test}/taketest','TestController@displaytest');
//Route::get('/user/{user}', 'ProfileController@update')->name('user.update');
