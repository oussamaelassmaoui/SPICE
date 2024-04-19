<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Contacts = contact::all();
        return view('contact.index', compact('Contacts'));
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $totalCartCount = 0; // Default value
        if ($request->user()) {
            $totalCartCount = $request->user()->cartItems()->count();
        }
        return view('pages.contact',compact('totalCartCount'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'name' => 'nullable',
            'phone' => 'nullable',
            'email'=> 'nullable',
            'subject'=> 'nullable',
            'message'=> 'nullable',
        ]);
        contact::create($validatedData);
        return redirect()->back();
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
        contact::findOrFail($id)->delete();
        return redirect()->back();
    }
}
