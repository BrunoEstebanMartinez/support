<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;

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
Route::view('', 'login');
Route::get('login', 'LoginBaseController@InitialLate')->name('Login');
Route::get('role', 'RoleController@Choose')->name('Choose');
Route::resource('user', 'UserController');

//Route::get('user', 'UserController@Bridge')->name('UserUp');
   
    // Route::view('Formteacher', 'formteacher');
    //Route::post('FormTeacher', 'TeacherController@ExperienceStore');
    //Route::resource('Formteacher', 'TeacherController');
    //Route::view('Formstudent', 'formstudent');


Route::resource('feed', 'FeedController');
Route::resource('Post', 'PostController');
Route::view('student', 'student');



