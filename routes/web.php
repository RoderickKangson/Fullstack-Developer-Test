<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;


Route::get('/', [TransactionController::class, 'index']);
Route::get('/transaction/{id}', [TransactionController::class, 'show']);
Route::get('/transaction/create', [TransactionController::class, 'create']);
Route::post('/transaction', [TransactionController::class, 'store']);
Route::get('/transaction/{id}/edit', [TransactionController::class, 'edit']);
Route::put('/transaction/{id}', [TransactionController::class, 'update']);
