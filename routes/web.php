<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Http; // para usar  Guzzle HTTP client


Route::get('/', [ClientesController::class, 'index']);
// routes/web.php
// Array con nombre de las rutas
Route::resource('clientes', ClientesController::class)->names([
    'show' => 'clientes.show',
    'edit' => 'clientes.edit',
    'destroy' => 'clientes.destroy',
]);

