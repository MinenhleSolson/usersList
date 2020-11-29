<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostsController;


Route::get('/', [DashboardController::class, 'index'])-> name('dashboard');

Route::resource('users', PostsController::class);