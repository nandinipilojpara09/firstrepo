<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',[UserController::class,'fetchUsers'])->name('fetch-users');
