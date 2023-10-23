<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Franchise;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FranchiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $franchises = Franchise::all();
        return view('admin.franchise.index', compact('franchises'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.franchise.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required',
            'description' => 'required',
            'file' => 'required|image',
            'category' => 'required',
        ]);

        $path = 'images/franchise/';
        $name = Str::random(20) . "." . $request->file('file')->getClientOriginalExtension();
        $request->file('file')->move(public_path($path), $name);

        Franchise::create([
            'category_id' => $request->category,
            'name' => $request->name,
            'link' => $request->link,
            'description' => $request->description,
            'image' => $path . $name,
        ]);

        return redirect()->route('franchise.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Franchise $franchise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Franchise $franchise)
    {
        $categories = Category::all();
        return view('admin.franchise.edit', compact('franchise', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Franchise $franchise)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required',
            'description' => 'required',
            'file' => 'image',
            'category' => 'required',
        ]);

        if ($request->hasFile('file')) {
            $path = 'images/franchise/';
            $name = Str::random(20) . "." . $request->file('file')->getClientOriginalExtension();
            $request->file('file')->move(public_path($path), $name);

            $franchise->update([
                'category_id' => $request->category,
                'name' => $request->name,
                'link' => $request->link,
                'description' => $request->description,
                'image' => $path . $name,
            ]);
        } else {
            $franchise->update([
                'category_id' => $request->category,
                'name' => $request->name,
                'link' => $request->link,
                'description' => $request->description,
            ]);
        }

        return redirect()->route('franchise.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Franchise $franchise)
    {
        unlink(public_path($franchise->image));
        $franchise->delete();

        return redirect()->route('franchise.index');
    }
}
