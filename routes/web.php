<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenjualanController;


Route::get('/', [PenjualanController::class, 'index'])->name('penjualan.index');

Route::get('/penjualan/baru', [PenjualanController::class, 'create'])->name('penjualan.create');

Route::post('/penjualan', [PenjualanController::class, 'store'])->name('penjualan.store');

Route::get('/penjualan/{id}/struk', [PenjualanController::class, 'showStruk'])->name('penjualan.struk');

Route::get('/penjualan/{id}/struk', [PenjualanController::class, 'showStruk'])->name('penjualan.struk');

Route::get('/penjualan/create', [PenjualanController::class, 'create'])->name('penjualan.create');

Route::get('/penjualan/{id}', [PenjualanController::class, 'show'])->name('penjualan.show');

Route::get('/penjualan/{penjualan}', [PenjualanController::class, 'show'])->name('penjualan.show');

Route::get('/penjualan', [PenjualanController::class, 'index'])->name('penjualan.index');
