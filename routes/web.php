<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, 'accueil'])->name('main.accueil');

Route::get('/menu', [MainController::class, 'menu'])->name('main.menu');

Route::get('/plat/{id}', [MainController::class, 'plat'])->name('main.plat');

Route::get('/reservation', [MainController::class, 'reservation'])->name('main.reservation');

Route::post('/reservation', [MainController::class, 'reservationStore'])->name('main.reservation.store');

Route::get('/apropos', [MainController::class, 'apropos'])->name('main.apropos');

Route::get('/contact', [MainController::class, 'contact'])->name('main.contact');

// Route::get('/plat/{id}', [MainController::class, 'plat'])->name('main.plat');

