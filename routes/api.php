<?php

use App\Http\Controllers\CategoriaController;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/categoria', [CategoriaController::class, 'store'] );
Route::get('/categorias', [CategoriaController::class, 'index'] );
Route::get('/categoria/{id}', [CategoriaController::class, 'show'] );
Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy'] );
