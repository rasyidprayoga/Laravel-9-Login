<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardInventarisController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

//Login
Route::get('/', function () {
    return view('login/login');
})->middleware('guest')->name('login')->middleware('guest');
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/create-account', [RegisterController::class, 'createAccount']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/data-inventaris', DashboardInventarisController::class)->middleware('auth');