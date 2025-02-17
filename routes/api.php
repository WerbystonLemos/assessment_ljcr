<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\SubcategoriaController;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/categoria', [CategoriaController::class, 'store'] );
Route::get('/categorias', [CategoriaController::class, 'index'] );
Route::put('/categoria/{id}', [CategoriaController::class, 'update'] );
Route::get('/categoria/{id}', [CategoriaController::class, 'show'] );
Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy'] );

Route::post('/subcategoria', [SubcategoriaController::class, 'store'] );
Route::get('/subcategorias', [SubcategoriaController::class, 'index'] );
Route::put('/subcategoria/{id}', [SubcategoriaController::class, 'update'] );
Route::get('/subcategoria/{id}', [SubcategoriaController::class, 'show'] );
Route::delete('/subcategoria/{id}', [SubcategoriaController::class, 'destroy'] );
