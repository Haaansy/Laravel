<?php

use App\Http\Controllers\GreetController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class,'index']);

Route::get('/greet', [GreetController::class,'Greet']);

Route::get('/hello', function () {
    return "hello!";
});

Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
