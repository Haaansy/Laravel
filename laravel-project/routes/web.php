<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;

Route::get('/Hello', function () {
    return "Hello, Laravel";
});

Route::get('/Greet', [GreetController::class, 'Greet']);

Route::apiResource('tasks', TaskController::class);