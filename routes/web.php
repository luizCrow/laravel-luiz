<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ApiProdutoController;

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

Route::resource('produtos', ProdutoController::class);

Route::get('/produtos', [ApiProdutoController::class, 'index']);
Route::get('/produtos/{id}', [ApiProdutoController::class, 'show']);
Route::post('/produtos', [ApiProdutoController::class, 'store']);
Route::put('/produtos/{id}', [ApiProdutoController::class, 'update']);
Route::delete('/produtos/{id}', [ApiProdutoController::class, 'destroy']);