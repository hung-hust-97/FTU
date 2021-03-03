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

/**
 * 2019
 */


//Page lien quan
Route::get('/tong-quan','FTU2019Controller@tongquan')->name('tongquan');
//Route::post('/register','FTU2Controller@register')->name('register');
Route::get('/doi-tac','FTU2019Controller@doitac')->name('doitac');
Route::get('/giai-thuong','FTU2019Controller@giaithuong')->name('giaithuong');




//Vòng 1

Route::get('/','FTU2019Controller@homepage')->name('home');
Route::get('/updateData','FTU2019Controller@updateData')->name('updateData');
Route::get('/updateAnswer','FTU2019Controller@reshapeData')->name('reshapeData');
// Route::get('/test','FTU2019Controller@rawAns');
Route::get('/login','UserController@login')->name('login');
Route::post('/login','UserController@loginPost')->name('loginPost');
Route::get('/logout','UserController@logout')->name('logout');
Route::get('/dang-ky','UserController@register')->name('dangky');
Route::get('/xac-nhan-dang-ky-vong-1','UserController@registerConfirmV1')->name('dangkyvong1');
Route::post('/register','UserController@requestRegister')->name('register');
Route::get('/forgot_password','UserController@forgotPassword')->name('forgot_password');
Route::get('/password/reset/{token?}', 'UserController@resetPassword');
Route::post('/password/email', 'UserController@sendResetLinkEmail')->name('password.email');
Route::post('/password/reset', 'UserController@saveNewPassword')->name('password.request');



//Challenge
Route::get('/thu-thach','FTU2019Controller@challenge')->name('challenge');
Route::post('/result','FTU2019Controller@checkResult')->name('submit_result');
Route::get('/ket-qua','FTU2019Controller@showResult')->name('show_result');
Route::post('/getExam','FTU2019Controller@getExam')->name('getExam');
Route::post('/verify', 'FTU2019Controller@verifyExam')->name('verify');

/**
 * Admin
 **/

Route::get('/administrator','FTU2019Controller@administrator')->name('administrator.login');
Route::post('/administrator/action','FTU2019Controller@administratorAction')->name('administrator.action');
Route::get('/administrator/action','FTU2019Controller@viewAdminAction')->name('administrator.action.view');
Route::get('/administrator/logout', 'FTU2019Controller@adminLogout');

Route::get('/reset/password','FTU2019Controller@resetPassword')->name('administrator.reset');
Route::post('/reset/password','FTU2019Controller@resetPasswordPost')->name('administrator.reset.post');
Route::get('/ajax/member','FTU2019Controller@getListCandicate');
Route::post('/ajax/changePassword','FTU2019Controller@changePassword');
Route::get('/download/data','FTU2019Controller@exportExcel')->name('download_data');

//Route::get('/check/administrator','InvestController@testcase')->name('test');


//Chung kết

Route::post('/register-final','FinalController@requestRegister')->name('register_final');
Route::get('/dang-ky-chung-ket','FinalController@registerFinal')->name('dangkychungket');
Route::get('/xac-nhan-dang-ky-chung-ket','FinalController@confirmRegisterFinal')->name('xacnhandangkychungket');



