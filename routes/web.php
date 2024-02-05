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

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
//login/register
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout']);


//sistem dashboarad
<<<<<<< HEAD
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/pricelist', [PricelistController::class, 'index'])->name('pricelist');
    Route::get('/create-pricelist', [PricelistController::class, 'create'])->name('create-pricelist');
    Route::post('/submit-pricelist', [PricelistController::class, 'store'])->name('submit-pricelist');
    Route::get('/edit-pricelist/{id}', [PricelistController::class, 'edit'])->name('edit-pricelist');
    Route::post('/update-pricelist/{id}', [PricelistController::class, 'update'])->name('update-pricelist');
    Route::get('/delete-pricelist/{id}', [PricelistController::class, 'destroy'])->name('delete-pricelist');
    Route::get('/reservasi', [ReservasiController::class, 'index']);
    Route::get('/promo', [PromoController::class, 'index']);
    Route::get('/testimoni', [TestimoniController::class, 'index']);
    Route::get('/events', [EventsController::class, 'index']);
    Route::get('/laporan', [LaporanController::class, 'index']);
=======
Route::get('/dashboard/pricelist', [PricelistController::class, 'index']);
Route::get('/dashboard/reservasi', [ReservasiController::class, 'index']);
Route::get('/dashboard/promo', [PromoController::class, 'index']);
Route::get('/dashboard/testimoni', [TestimoniController::class, 'index']);
Route::get('/dashboard/events', [EventsController::class, 'index']);
Route::get('/dashboard/laporan', [LaporanController::class, 'index']);
>>>>>>> c84618d7de38b80b4c86081e0962ef048d2ee7f4

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/dashboard', DashboardController::class);




    


});




