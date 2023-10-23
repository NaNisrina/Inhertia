<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function franchise()
    {
        return view('franchise');
    }

    // public function auth ()
    // {
    //     return view('auth.login');
    // }
}
