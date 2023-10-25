<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/solucao', [HomeController::class, 'index']);
Route::get('/paginainicial', [HomeController::class, 'index']);

Route::get('/quem-somos', [HomeController::class, 'quemsomos'])->name('quemsomos');


