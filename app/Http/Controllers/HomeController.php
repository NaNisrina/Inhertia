<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Franchise;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function franchise(Request $request)
    {
        $categories = Category::with('franchise')->get();

        return view('franchise', compact('categories'));
    }

    // public function auth ()
    // {
    //     return view('auth.login');
    // }
}
