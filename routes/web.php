<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/topik', [DashboardController::class, 'topik'])->name('topik');
Route::get('/data', [DashboardController::class, 'data'])->name('data');
