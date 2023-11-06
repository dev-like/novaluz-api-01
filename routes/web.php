<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CController;

Route::get('/', [CController::class, 'index']);
// Recuperar todas
Route::get('/dd', [CController::class, 'dd']);
Route::get('/return', [CController::class, 'return']);
