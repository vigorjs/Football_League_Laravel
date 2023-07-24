<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\auth\LoginController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware('auth')->name('admin.')->prefix('admin')->group(function(){
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/user', [AdminController::class, 'user'])->name('user');
});

Route::get('login', [LoginController::class, 'login'])->name('auth.login');
Route::post('login-proses', [LoginController::class, 'proses'])->name('auth.login-proses');
Route::post('register-proses', [LoginController::class, 'proses_register'])->name('auth.register-proses');
Route::get('logout', [LoginController::class, 'logout'])->name('auth.logout');
Route::get('register', [LoginController::class, 'register'])->name('auth.register');


Route::get('clubs', [LandingPageController::class, 'clubs'])->name('landing.clubs');
Route::get('players', [LandingPageController::class, 'players'])->name('landing.players');
Route::get('managers', [LandingPageController::class, 'managers'])->name('landing.managers');
Route::get('stadiums', [LandingPageController::class, 'stadiums'])->name('landing.stadiums');
Route::resource('/', LandingPageController::class);
