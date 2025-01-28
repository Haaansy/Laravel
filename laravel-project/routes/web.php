<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;

Route::get('/Hello', function () {
    return "Hello, Laravel";
});

Route::get('/Greet', [GreetController::class, 'Greet']);