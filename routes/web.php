<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('index');

//New Blogger Registration
Route::get('/registration', [RegistrationController::class, 'registration'])->name('registration');
Route::post('/registration', [RegistrationController::class, 'registrationSubmitted'])->name('registration');

//Login & Logout
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginSubmit'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//Blogger Dashboard
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

//User List
Route::get('/userList', [UserController::class, 'userList'])->name('userList');