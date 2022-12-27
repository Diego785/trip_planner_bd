<?php

use App\Http\Controllers\ApiController\LineaController;
use App\Http\Controllers\ApiController\PuntoController;
use App\Http\Controllers\ApiController\RecorridoController;
use App\Http\Controllers\ApiController\RutaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// ---------- API FOR FLUTTER ------------ //

// LINEA
Route::get('linea', [LineaController::class, 'index'])->name('linea');

// PUNTO
Route::get('punto', [PuntoController::class, 'index'])->name('punto');
Route::get('allpoints', [PuntoController::class, 'allPoints'])->name('all-points');

// RECORRIDO
Route::get('recorrido', [RecorridoController::class, 'index'])->name('recorrido');
Route::get('recorridoLinea', [RecorridoController::class, 'recorridoLinea'])->name('recorrido.linea');



