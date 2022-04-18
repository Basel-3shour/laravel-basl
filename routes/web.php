<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\DB;
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
Route::get('/',[TaskController::class,'index'])->name('tasks.index');
Route::get('tasks',[TaskController::class,'index'])->name('tasks.index');
Route::get('/tasks/{id}',[TaskController::class,'show'])->name('tasks.show');
Route::post('store',[TaskController::class,'store'])->name('tasks.store');
Route::delete('delete/{id}',[TaskController::class,'destory'])->name('tasks.destory');
Route::post('edit/{id}',[TaskController::class,'edit'])->name('edit.tasks');
Route::post('update/{id}',[TaskController::class,'update'])->name('tasks.update');
