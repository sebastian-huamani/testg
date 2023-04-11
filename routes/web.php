<?php

use App\Http\Controllers\GaseosaController;
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
Route::get('/producto/{gaseosa}/show', [GaseosaController::class, 'edit'])->name('gaseosa.show');
Route::post('/producto/{gaseosa}/edit', [GaseosaController::class, 'update'])->name('gaseosa.show');
Route::post('/producto/{gaseosa}', [GaseosaController::class, 'destroy']);
