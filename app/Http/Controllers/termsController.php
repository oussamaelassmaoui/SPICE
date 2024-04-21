<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\termsCondition;

class termsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {

        $this->middleware(['auth','role:admin']);

    }
    public function index()
    {
        $termsCondition = termsCondition::all();
        return view('termsCondition.index', compact('termsCondition'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('termsCondition.create');
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

        termsCondition::create($validatedData);

        return redirect()->route('termsCondition.index');
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
        $termsCondition = termsCondition::findOrFail($id);

        return view('termsCondition.edit', compact('termsCondition'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'content' => 'nullable',
            
        ]);

        $termsCondition = termsCondition::findOrFail($id);

        $termsCondition->update($validatedData);

        return to_route('termsCondition.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        termsCondition::findOrFail($id)->delete();
        return to_route('termsCondition.index');
    }
}
