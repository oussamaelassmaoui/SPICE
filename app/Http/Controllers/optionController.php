<?php

namespace App\Http\Controllers;

use App\Models\option;
use Illuminate\Http\Request;

class optionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $options=option::all();
        return view('options.index' , compact('options'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('options.index');
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
        
        

  
        option::create($validatedData);
    
        return redirect()->route('options.index');
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
        $options = option::findOrFail($id);
        return view('options.edit', compact('options'));
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
        
        $option= option::findOrFail($id);  
        $option ->update($validatedData);  
        return back(); 
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        option::findOrFail($id)->delete();
        return to_route('options.index');
    }
}
