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




/*
Route::get('/', function () {
    return view('frontend/main');
});
*/
Route::get('/','Web\Frontend\HomePageController@homePage')->name('homePage');
Route::get('/lang/{lang?}','Web\TranslationController@changeLocale')->name('selectLang');
Route::get('/login','Web\Frontend\LoginController@Index')->name('login');
Route::post('/login','Web\Frontend\LoginController@loginControl')->name('loginControl');
Route::get('/register/{id?}','Web\Frontend\RegisterController@Index')->name('register');
Route::post('/register/{id?}','Web\Frontend\RegisterController@newUser')->name('newUserPost');
Route::get('/passwordreset','Web\Frontend\LoginController@passwordReset')->name('passwordReset');
Route::get('/passwordreset/{id}','Web\Frontend\LoginController@passwordReset')->name('passwordResetToken');
Route::post('/passwordreset/{id}','Web\Frontend\LoginController@postPasswordResetToken')->name('postPasswordResetToken');
Route::post('/passwordreset','Web\Frontend\LoginController@postPasswordReset')->name('postPasswordReset');
Route::get('/logout','Web\Frontend\LoginController@logout')->name('logout');

//Register Formunda Ajax ile veri aldığımız route listesi
Route::post('/sponsorControl','Web\Frontend\AjaxController@controlSponsor')->name('controlSponsor');
Route::post('/usernameControl','Web\Frontend\AjaxController@controlUsername')->name('controlUsername');
Route::post('/emailControl','Web\Frontend\AjaxController@controlEmail')->name('controlEmail');
Route::post('/cityList','Web\Frontend\AjaxController@cityList')->name('registerCityList');


Route::group(['prefix' => 'backoffice','middleware' => ['checkUser','authFilter']], function () {

    Route::get('/','Web\Backend\DashboardController@dasboard')->name('dashboard');
    Route::get('/noauthorization','Web\Backend\UserController@noAuthorization')->name('noAuthorization');

    //backend tarafındaki ajax ile veri aldığımız linkler
    Route::post('/sponsorControl','Web\Frontend\AjaxController@controlSponsor')->name('controlSponsor');

    Route::get('/profile','Web\Backend\UserController@getProfile')->name('myProfile');
    Route::post('/profile','Web\Backend\UserController@myProfilePost')->name('myProfilePost');
    Route::get('/passwordchange','Web\Backend\UserController@getPassword')->name('getPassword');
    Route::post('/passwordchange','Web\Backend\UserController@postPassword')->name('postPasswordChange');

    //Ekibim Bölümü
    Route::get('/team','Web\Backend\MyTeamController@getTeam')->name('getTeam');
    Route::get('/findteam/{id?}','Web\Frontend\AjaxController@getTeam')->name('getTeamAjax');

    //Tüm üyeler
    Route::get('/members','Web\Backend\MembersController@userList')->name('getMemberList');

    //Üyeler Bölümü
    //Route::get('/members','Web\Backend\myTeamController@members')->route('members');

});