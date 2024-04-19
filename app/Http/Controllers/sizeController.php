<?php

namespace App\Http\Controllers;

use App\Models\size;
use Illuminate\Http\Request;

class sizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sizes=size::all();
        return view('sizes.index' , compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sizes.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'required',
            'price'=> 'required',
        ]);
        
        

  
        size::create($validatedData);
    
        return redirect()->route('sizes.index');
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
        $sizes = size::findOrFail($id);
        return view('sizes.edit', compact('sizes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name'=> 'required',
            'price'=> 'required',
        ]);
        
        $size= Size::findOrFail($id);  
        $size ->update($validatedData);  
        return back(); 
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        size::findOrFail($id)->delete();
        return to_route('sizes.index');
    }
}
