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
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/pricelist', [PricelistController::class, 'index'])->name('pricelist');
        Route::get('/create-pricelist', [PricelistController::class, 'create'])->name('create-pricelist');
        Route::post('/submit-pricelist', [PricelistController::class, 'store'])->name('submit-pricelist');
        Route::get('/edit-pricelist/{id}', [PricelistController::class, 'edit'])->name('edit-pricelist');
        Route::post('/update-pricelist/{id}', [PricelistController::class, 'update'])->name('update-pricelist');
        Route::get('/delete-pricelist/{id}', [PricelistController::class, 'destroy'])->name('delete-pricelist');
    Route::get('/reservasi', [ReservasiController::class, 'index'])->name('reservasi');
        Route::post('/submit-reservasi', [ReservasiController::class, 'store'])->name('submit-reservasi');
        Route::post('/konfirmasi-reservasi', [ReservasiController::class, 'konfirmasi'])->name('konfirmasi-reservasi');
        Route::get('/detail-reservasi/{id}', [ReservasiController::class, 'detail'])->name('detail-reservasi');
        Route::get('/reservasi/export', [ReservasiController::class, 'export'])->name('reservasi.export');
        Route::post('/reservasi/import', [ReservasiController::class, 'import'])->name('reservasi.import');

    Route::get('/events', [EventsController::class, 'index'])->name('events');
        Route::get('/create-events', [EventsController::class, 'create'])->name('create-events');
        Route::post('/submit-events', [EventsController::class, 'store'])->name('submit-events');
        Route::get('/edit-events/{id}', [EventsController::class, 'edit'])->name('edit-events');
        Route::post('/update-events/{id}', [EventsController::class, 'update'])->name('update-events');
        Route::get('/delete-events/{id}', [EventsController::class, 'destroy'])->name('delete-events');
    Route::get('/promo', [PromoController::class, 'index'])->name('promo');
        Route::get('/create-promo', [PromoController::class, 'create'])->name('create-promo');
        Route::post('/submit-promo', [PromoController::class, 'store'])->name('submit-promo');
        Route::get('/edit-promo/{id}', [PromoController::class, 'edit'])->name('edit-promo');
        Route::post('/update-promo/{id}', [PromoController::class, 'update'])->name('update-promo');
        Route::get('/delete-promo/{id}', [PromoController::class, 'destroy'])->name('delete-promo');
    Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni');
        Route::get('/create-testimoni', [TestimoniController::class, 'create'])->name('create-testimoni');
        Route::post('/submit-testimoni', [TestimoniController::class, 'store'])->name('submit-testimoni');
        Route::get('/edit-testimoni/{id}', [TestimoniController::class, 'edit'])->name('edit-testimoni');
        Route::post('/update-testimoni/{id}', [TestimoniController::class, 'update'])->name('update-testimoni');
        Route::get('/delete-testimoni/{id}', [TestimoniController::class, 'destroy'])->name('delete-testimoni');
    Route::get('/laporan', [LaporanController::class, 'index']);
    

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/dashboard', DashboardController::class);




    


});




