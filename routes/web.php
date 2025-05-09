<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;

Route::get('/', [TransactionController::class, 'index'])->name('transactions.index');
Route::prefix('transaction')->name('transactions.')->group(function () {
    Route::get('/create', [TransactionController::class, 'create'])->name('create');
    Route::post('/', [TransactionController::class, 'store'])->name('store');
    Route::post('/{transaction}/edit', [TransactionController::class, 'edit'])->name('edit');
});