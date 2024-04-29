<?php

use App\Http\Controllers\TodOController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/todo', [TodOController::class, 'index'])->name('todo.index');
Route::get('/todo/create', [TodOController::class, 'create'])->name('todo.create');
Route::post('/todo', [TodOController::class, 'store'])->name('todo.store');
Route::get('/todo/{todo}/edit', [TodOController::class, 'edit'])->name('todo.edit');
Route::put('/todo/{todo}/update', [TodOController::class, 'update'])->name('todo.update');
Route::delete('/todo/{todo}/destroy', [TodOController::class, 'destroy'])->name('todo.destroy');