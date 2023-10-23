<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FranchiseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
|
*/

Route::get('/', function(){
    return view("admin.dashboard");
})->name('admin.dashboard');

Route::resource('/category', CategoryController::class);
Route::resource('/franchise', FranchiseController::class);
