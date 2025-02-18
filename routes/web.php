<?php

use App\Http\Controllers\RegisterUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterUserController::class, 'create']);
