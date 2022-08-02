<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\TodoController;


// Route::get('/', function () {
//     return view('myapp/index',compact('todos'));
// });

Route::get('/',  [TodoController::class, 'index']);
Route::post('/',  [TodoController::class, 'store']);
Route::post('/{id}',  [TodoController::class, 'destroy'])->name('destroy');

Route::get('/edit/{id}',  [TodoController::class, 'edit'])->name('edit');

Route::get('/update/{id}',  [TodoController::class, 'update'])->name('update');



