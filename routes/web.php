<?php

use App\Http\Controllers\GaseosaController;
use App\Http\Controllers\MarcaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos', [GaseosaController::class, 'index']);
Route::get('/producto/crear', [GaseosaController::class, 'create']);
Route::get('/producto', [GaseosaController::class, 'store']);
Route::get('/producto/{id}/show', [GaseosaController::class, 'edit']);
Route::post('/producto/edit/{id}', [GaseosaController::class, 'update']);
Route::post('/producto/delete/{id}', [GaseosaController::class, 'destroy']);


Route::get('/marcas', [MarcaController::class, 'index']);
Route::get('/marca/crear', [MarcaController::class, 'create']);
Route::get('/marca', [MarcaController::class, 'store']);
Route::get('/marca/{id}/show', [MarcaController::class, 'edit']);
Route::post('/marca/edit/{id}', [MarcaController::class, 'update']);
