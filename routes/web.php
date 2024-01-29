<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PricelistController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\TestimoniController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
//login/register
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout']);


//sistem dashboarad
Route::get('/pricelist', [PricelistController::class, 'index']);
Route::get('/dashboard/reservasi', [ReservasiController::class, 'index']);
Route::get('/dashboard/promo', [PromoController::class, 'index']);
Route::get('/dashboard/testimoni', [TestimoniController::class, 'index']);
Route::get('/dashboard/events', [EventsController::class, 'index']);
Route::get('/dashboard/laporan', [LaporanController::class, 'index']);

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/dashboard', DashboardController::class);




    


});




