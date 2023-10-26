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
Route::get('/equipe', [HomeController::class, 'equipe'])->name('equipe');
Route::get('/frota', [HomeController::class, 'frota'])->name('frota');
Route::get('/linha-do-tempo', [HomeController::class, 'timeline'])->name('timeline');


Route::get('/venda-geradores-energia', [HomeController::class, 'venda'])->name('venda');
Route::get('/locacao-geradores-energia', [HomeController::class, 'locacao'])->name('locacao');
Route::get('/manutencao-geradores-energia', [HomeController::class, 'manutencao'])->name('manutencao');
