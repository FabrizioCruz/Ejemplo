<?php

use App\Http\Controllers\SistemaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdiomaController;
use App\Http\Controllers\PruebaController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\Router;

use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('salir', [SistemaController::class, 'salir'])->name('salir');
Route::get('login', [SistemaController::class, 'entrada'])->name('login');
Route::post('validar', [SistemaController::class, 'validar'])->name('validar');
Route::get('ropciones', [SistemaController::class, 'mopciones'])->name('nopciones');
Route::get('seleccionar', [idiomaController::class, 'seleccionar'])->name('seleccionar');
Route::get('saludar', [idiomaController::class, 'saludar'])->name('saludar');
Route::post('procesar', [idiomaController::class, 'procesar'])->name('procesar');
Route::get('despedir', [idiomaController::class, 'despedir'])->name('despedir');
