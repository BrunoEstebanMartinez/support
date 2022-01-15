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

Route::view('', 'login');
Route::view('login', 'login');
Route::view('role', 'role');
Route::view('Formteacher', 'formteacher');
Route::view('Formstudent', 'formstudent');
Route::view('teacher', 'teacher');
Route::view('student', 'student');

