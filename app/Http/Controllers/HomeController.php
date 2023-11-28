<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Franchise;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $franchises = Franchise::all();

        $datas = [];
        for ($i = 1; $i <= count($franchises) ; $i++) {
            if ($i % 2 == 0) {
                $datas[floor($i / 2)] = [
                    [
                        'image' => $franchises[$i - 1]->image,
                        'slug' => $franchises[$i - 1]->slug,
                    ]
                ];
            } else {
                $datas[floor($i / 2)][1] = [
                    'image' => $franchises[$i - 1]->image,
                    'slug' => $franchises[$i - 1]->slug,
                ];
            }
            // var_dump(floor($i / 2));
            // echo "<br>";
        }

        // dd($datas, $franchises);

        return view('home', compact('categories', 'datas'));
    }

    public function franchise(Request $request)
    {

        $search = true;
        if ($request->has('category')) {
            $categories = Category::where('slug', $request->category)->with('franchise')->get();
        } else {
            $search = false;
            $categories = Category::with('franchiseLimit')->get();
        }


        return view('franchise', compact('categories', 'search'));
    }

    public function franchiseDetail(Request $request, $slug)
    {
        $franchise = Franchise::where('slug', $slug)->with('category')->get()[0];

        return view('franchiseDetail', compact('franchise'));
    }



    // public function auth ()
    // {
    //     return view('auth.login');
    // }
}
