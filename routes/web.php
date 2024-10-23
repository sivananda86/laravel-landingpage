<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepanController;
use App\Http\Controllers\TaskController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/depan', [DepanController::class, 'index']);
Route::get('/landingpage', [TaskController::class, 'index']);