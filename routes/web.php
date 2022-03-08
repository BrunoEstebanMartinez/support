<?php

use Illuminate\Support\Facades\Route;

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
//or

// phone alias route
//or Route::get,post,put (url) 
//Route::post('ruta/', [PhoneController::class, 'method']);

//Route::resource('', 'PhoneController');
//Route::resource('phone', 'PhoneController');
//Route::group(['prefix' => 'canvas'], function(){});



// Welcome
    //Login routes
Route::view('', 'login');
Route::get('login', 'LoginBaseController@InitialLate')->name('Login');
Route::post('login', 'LoginBaseController@authusercredentials')->name('authusercredentials');
Route::post('logout', 'LoginBaseController@logout')->name('logout');

//Bridge
Route::get('role', 'RoleController@index')->name('Choose');
//Route::get('user/{role_name}', 'UserController@forms')->name('UpUser');
//Route::get('user', 'UserController@showMeView')->name('UpUser');
Route::get('user', 'UserController@forms')->name('UpUser');

//RegisterAuth
Route::post('user', 'UserController@register')->name('register');



   
    // Route::view('Formteacher', 'formteacher');
    //Route::post('FormTeacher', 'TeacherController@ExperienceStore');
    //Route::resource('Formteacher', 'TeacherController');
    //Route::view('Formstudent', 'formstudent');

//UpFeed
Route::get('/post', 'PostController@index')->name('FeedInPost');
Route::post('post', 'PostController@registerInfo')->name('PostInFeed');

Route::get('/feed', 'FeedController@index')->name('feed');
Route::view('student', 'student');



