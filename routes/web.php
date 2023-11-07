<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CController;

Route::get('/', [CController::class, 'index']);
Route::get('/dd', [CController::class, 'dd']); // Recuperar todas
