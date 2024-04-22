<?php

namespace App\Http\Controllers;

use App\Models\chef;
use App\Models\Article;
use App\Models\Setting;
use App\Models\Information;
use Illuminate\Http\Request;

class chefsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $totalCartCount = 0; // Default value
        if ($request->user()) {
            $totalCartCount = $request->user()->cartItems()->count();
        }
        $chefs=chef::latest()->paginate(20);
        $Information=Information::paginate(1);
        $Settings=Setting::paginate(1);
        $footers=Article::paginate(2);
        return view('pages.chefs',compact('totalCartCount','chefs', 'Information', 'Settings','footers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
