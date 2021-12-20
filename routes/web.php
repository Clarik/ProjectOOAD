<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
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
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register/MSME', [RegisterController::class, 'indexMSME']);
Route::get('/register/Applicant', [RegisterController::class, 'indexApplicant']);
Route::post('/register/MSME', [RegisterController::class, 'signUpMSME']);
Route::post('/register/Applicant', [RegisterController::class, 'signUpApplicant']);

Route::get('/register', function(){
    return view('register');
});

Route::get('/forum', function(){
    return view('forum');
});


Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/search', [SearchController::class, 'getSearchResults']);
