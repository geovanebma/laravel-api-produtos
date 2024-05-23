<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\EmpresaController;

// Rotas para EmpresaController
Route::get('empresas', [EmpresaController::class, 'index']);
Route::post('empresas', [EmpresaController::class, 'store']);
Route::get('empresas/{id}', [EmpresaController::class, 'show']);
Route::put('empresas/{id}', [EmpresaController::class, 'update']);
Route::delete('empresas/{id}', [EmpresaController::class, 'destroy']);

// Rotas para ProdutoController
Route::get('produtos', [ProdutoController::class, 'index']);
Route::post('produtos', [ProdutoController::class, 'store']);
Route::get('produtos/{id}', [ProdutoController::class, 'show']);
Route::put('produtos/{id}', [ProdutoController::class, 'update']);
Route::delete('produtos/{id}', [ProdutoController::class, 'destroy']);
