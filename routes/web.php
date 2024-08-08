<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::prefix('tasks')->group(function(){
    Route::get('/',[TaskController::class,'Index'])->name('tasks.index');
    Route::post('/store',[TaskController::class,'store'])->name('tasks.store');
    Route::delete('/clear', [TaskController::class, 'clear'])->name('tasks.clear');
    Route::delete('/{task}',[TaskController::class,'destroy'])->name('tasks.destroy');
});