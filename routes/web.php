<?php

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/
//Login
Auth::routes();


//Password Reset Failed
Route::get('password-reset-failed', 'PublicRegisterController@resetFailed');


//Route::get('/home', 'HomeController@index');

//Logout
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

//MIDDLEWARE FOR ADMIN
Route::group(['middleware' => 'admin'], function() {

    //Admin Interface
    Route::get('/dashboard', 'admin\AdminController@loadUserDashboard');

    //Users
    Route::resource('admin/users', 'admin\AdminUsersController');

    //News
    Route::resource('admin/news', 'admin\AdminNewsController');

});

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

//Home
Route::resource('/', 'PublicHomeController@index');

//OurCompany
Route::resource('our-company', 'PublicOurCompanyController@index');

//Services
Route::resource('quality-services', 'PublicServicesController@index');
Route::get('quality-services/{id}', 'PublicServicesController@index');

//News
Route::get('news', 'PublicNewsController@index');
Route::get('news/{id}', 'PublicNewsController@show');

//Contact
Route::get('contact-us', 'PublicContactController@index');
Route::post('sendMail', 'PublicContactController@contactForm');
Route::get('judgement-removal-request', 'PublicContactController@judgementRemovalShow');
Route::get('information-request', 'PublicContactController@informationRequest');
Route::post('infoRequest', 'PublicContactController@infoRequest');

//Terms & Conditions
Route::get('terms-and-conditions', 'PublicTermsAndConditionsController@termsAndConditions');

//Disclaimer
Route::get('disclaimer', 'PublicTermsAndConditionsController@disclaimer');

//register Company
Route::resource('register', 'PublicRegisterController@index');
Route::resource('register-company-details-store', 'PublicRegisterController@companyDetailsStore');
Route::resource('/register/checkbox-add', 'PublicRegisterController@addSelected');

//Register Company Contact Details
Route::resource('register-contact-details-store', 'PublicRegisterController@contactRegisterStore');

//register Company Banking Details
Route::post('register-bank-and-login-details-store', 'PublicRegisterController@bankAndLoginRegisterStore');

//register t's & c's
Route::get('register-disclaimer', 'PublicRegisterController@registerDisclaimer');

//register t's & c's
Route::get('register-complete', 'PublicRegisterController@registerComplete');

//Credit health
Route::get('credit-health-register', 'PublicRegisterController@creditHealth');

//payment complete
Route::get('payment-complete', 'PublicRegisterController@paymentComplete');

//survey
Route::get('survey', 'PublicRegisterController@survey');

//survey
Route::get('survey-complete', 'PublicRegisterController@surveyComplete');
