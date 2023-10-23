<?php

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
|
*/

Route::get('/login', function(){
    return view("auth.login");
})->name('auth.login');

Route::post('/login', function(Request $request){
    $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);

    Auth::attempt([
        'username' => $request->username,
        'password' => $request->password,
    ]);



    if (Auth::check()) {
        return redirect()->route('admin.dashboard');
    } else {
        return redirect()->route('auth.login')->with('message', 'Username atau Password Salah');
    }
})->name('auth.authenticate');

Route::post('/logout', function(){
    Auth::logout();
    return view("auth.login");
})->name('auth.logout');