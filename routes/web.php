<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });


use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ReportController;

Route::get('/', [UserController::class,'index']);
Route::resource('users', UserController::class);
Route::resource('categories', CategoryController::class);
Route::resource('items', ItemController::class);
Route::resource('reports', ReportController::class);
