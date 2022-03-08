<?php

use App\Http\Controllers\ChefController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimoniController;
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
    return view('index');
});




//service
Route::get('/service', [ServiceController::class, 'index']);

//team
Route::get('/team', [ChefController::class, 'index']);

//testimoni
Route::get('/testimoni', [TestimoniController::class, 'index']);
