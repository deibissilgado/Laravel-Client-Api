<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Http; // para usar  Guzzle HTTP client


Route::get('/', [ClientesController::class, 'index']);
