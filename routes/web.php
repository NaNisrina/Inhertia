<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/franchise', [HomeController::class, 'franchise'])->name('franchise');
Route::get('/franchise/{slug}', [HomeController::class, 'franchiseDetail'])->name('franchise.detail');

Route::get('category', [CategoryController::class, 'category'])->name('category');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/logout', function(){
    Auth::logout();
    return view("auth.login");
})->name('auth.logout');