<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\TodoController;




Route::get('/',  [TodoController::class, 'index']);
Route::post('/',  [TodoController::class, 'store']);
Route::post('/{id}',  [TodoController::class, 'destroy'])->name('destroy');

Route::get('/edit/{id}',  [TodoController::class, 'edit'])->name('edit');
Route::post('/edit/{id}',  [TodoController::class, 'update'])->name('update');

Route::get('/update/{id}',  [TodoController::class, 'update'])->name('update');



