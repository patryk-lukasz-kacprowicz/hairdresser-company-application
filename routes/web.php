<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientLibraryController;
use App\Http\Controllers\HairdresserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibraryController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/library/{number}/info', [LibraryController::class, 'show'])->name('library.show');
Route::get('/library/{client}', [ClientLibraryController::class, 'index'])->name('library.index');
Route::post('/library', [ClientLibraryController::class, 'store'])->name('library.store');

Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
Route::get('/client/{client}', [ClientController::class, 'show'])->name('clients.show');
Route::delete('/client/{client}', [ClientController::class, 'destroy'])->name('clients.delete');
Route::put('/client/{client}', [ClientController::class, 'update'])->name('clients.update');

Route::get('/client/search/{clientLibraryNumber}', [LibraryController::class, 'show'])->name('clients.search');

Route::get('/hairdressers', [HairdresserController::class, 'index'])->name('hairdressers.index');
Route::post('/hairdressers', [HairdresserController::class, 'store'])->name('hairdressers.store');
Route::get('/hairdresser/update/{hairdresser}', [HairdresserController::class, 'edit'])->name('hairdressers.edit');
Route::put('/hairdresser/update/{hairdresser}', [HairdresserController::class, 'update'])->name('hairdressers.update');
Route::post('/hairdresser/{hairdresser}', [HairdresserController::class, 'show'])->name('hairdressers.show');

Route::get('/booking/{booking}', [BookingController::class, 'show'])->name('booking.show');
Route::post('/booking', [BookingController::class, 'store'])->name('bookings.store');
Route::put('/booking/{booking}', [BookingController::class, 'update'])->name('booking.change');

