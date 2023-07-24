<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingPageController;
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
Route::name('admin.')->prefix('admin')->group(function(){
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/user', [AdminController::class, 'user'])->name('user');
});

Route::get('clubs', [LandingPageController::class, 'clubs'])->name('landing.clubs');
Route::get('players', [LandingPageController::class, 'players'])->name('landing.players');
Route::get('managers', [LandingPageController::class, 'managers'])->name('landing.managers');
Route::get('stadiums', [LandingPageController::class, 'stadiums'])->name('landing.stadiums');
Route::resource('/', LandingPageController::class);
