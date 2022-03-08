<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/booking', [HomeController::class, 'booking'])->name('booking');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/menu', [HomeController::class, 'menu'])->name('menu');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/team', [HomeController::class, 'chef'])->name('team');
Route::get('/testimoni', [HomeController::class, 'testimoni'])->name('testimoni');
