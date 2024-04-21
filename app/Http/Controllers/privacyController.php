<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\privacypolicy;

class privacyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $privacypolicy = privacypolicy::all();
        return view('privacypolicy.index', compact('privacypolicy'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('privacypolicy.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'content' => 'nullable',
            
           
        ]);

        // $validatedData=$request->all();


        // Handle photo1 upload

        privacypolicy::create($validatedData);

        return redirect()->route('privacypolicy.index');
    }

    /**
     * Display the specified resource.
     */

    public function show(Request $request, string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $privacypolicy = privacypolicy::findOrFail($id);

        return view('privacypolicy.edit', compact('privacypolicy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'content' => 'nullable',
            
        ]);

        $privacypolicy = privacypolicy::findOrFail($id);

        $privacypolicy->update($validatedData);

        return to_route('privacypolicy.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        privacypolicy::findOrFail($id)->delete();
        return to_route('privacypolicy.index');
    }
}
