<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('index');
});

Route::get('/painel', [UserController::class, 'index']) ->name('user.dashboard');
Route::get('/admin', [AdminController::class, 'index']) ->name('admin.dashboard');
