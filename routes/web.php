<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TagController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/home', [TaskController::class, 'index'])->middleware('auth')->name('home');
Route::post('/store', [TaskController::class, 'store'])->name('store');
Route::post('/edit/{id}', [TaskController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [TaskController::class, 'update'])->name('update');
Route::post('/delete/{id}', [TaskController::class, 'delete'])->name('delete');


Route::get('/search', [TaskController::class,'search'])->name('search');
Route::get('/find', [TaskController::class,'find'])->name('find');
Route::post('/find', [TaskController::class, 'tasksearch'])->name('tasksearch');

/**動作確認用*/

Route::get('/relation', [TaskController::class, 'relate']);

Route::get('/test', [TaskController::class, 'test']);

require __DIR__.'/auth.php';
