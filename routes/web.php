<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\TaskController;

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

Route::get('/search',[TaskController::class, 'tasksearch']);

Route::get('/find', [TaskController::class,'find'])->name('find');

Route::post('/find', [TaskController::class, 'search'])->name('find');

require __DIR__.'/auth.php';
