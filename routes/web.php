<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

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
    return view('welcome');
});

Route::get('/produtos/novo', [ProdutosController::class, 'create']);
Route::post('/produtos/novo', [\App\Http\controllers\ProdutosController::class, 'store'])->name('registrar_produto');
Route::get('/produto/ver/{id}', [ProdutosController::class, 'show']);
Route::get('/produto/editar/{id}', [ProdutosController::class, 'edit']);
Route::post('/produtos/editar/{id}', [\App\Http\controllers\ProdutosController::class, 'update'])->name('alterar_produto');
Route::get('/produto/excluir/{id}', [ProdutosController::class, 'delete']);
Route::post('/produtos/excluir/{id}', [\App\Http\controllers\ProdutosController::class, 'destroy'])->name('excluir_produto');

