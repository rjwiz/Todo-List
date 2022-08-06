<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index'])->name('index');

Route::post('/store', [TaskController::class, 'store'])->name('store');

Route::post('/edit', [TaskController::class, 'edit'])->name('edit');

Route::post('/update/{id}', [TaskController::class, 'update'])->name('update');

Route::post('/delete/{id}', [TaskController::class, 'delete'])->name('delete');
