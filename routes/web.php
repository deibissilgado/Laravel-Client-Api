<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Http; // para usar  Guzzle HTTP client


Route::get('/', [ClientesController::class, 'index']);
Route::get('/Editar/{id}', [ClientesController::class, 'edit']);
Route::get('/Ver/{id}', [ClientesController::class, 'show']);
Route::get('/Eliminar/{id}', [ClientesController::class, 'destroy']);
