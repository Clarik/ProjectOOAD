<?php

use App\Http\Controllers\UserController;
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

Route::get('/login', [UserController::class, 'index']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/register/MSME', [UserController::class, 'signUpMSME']);
Route::post('/register/Applicant', [UserController::class, 'signUpApplicant']);

Route::get('/register', function(){
    return view('register');
});

Route::get('/register/MSME', function(){
    return view('msmeregis');
});

Route::get('/register/Applicant', function(){
    return view('applicantregis');
});

Route::get('/home', function(){
    return view('home');
});
