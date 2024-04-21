<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
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
        $Information = Information::all();
        return view('Information.index', compact('Information'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Information.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'Facebook' => 'nullable',
            'Twitter' => 'nullable',
            'linkedin' => 'nullable',
            'instagram' => 'nullable',
            'address' => 'nullable',
            'email1' => 'nullable',
            'email2' => 'nullable',
            'Mobile1' => 'nullable',
            'Mobile2' => 'nullable',
            'iframe_map' => 'nullable',
            'OUR_CLIENTS' => 'nullable',
            'YEARS_EXPERIENCE' => 'nullable',
            'FRESH_HALAL' => 'nullable',
            'TEAM_MEMBER' => 'nullable',

        ]);

        // $validatedData=$request->all();


        // Handle photo1 upload

        Information::create($validatedData);

        return redirect()->route('Information.index');
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
        $Information = Information::findOrFail($id);

        return view('Information.edit', compact('Information'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'Facebook' => 'nullable',
            'Twitter' => 'nullable',
            'linkedin' => 'nullable',
            'instagram' => 'nullable',
            'address' => 'nullable',
            'email1' => 'nullable',
            'email2' => 'nullable',
            'Mobile1' => 'nullable',
            'Mobile2' => 'nullable',
            'iframe_map' => 'nullable',
            'OUR_CLIENTS' => 'nullable',
            'YEARS_EXPERIENCE' => 'nullable',
            'FRESH_HALAL' => 'nullable',
            'TEAM_MEMBER' => 'nullable',
        ]);

        $Information = Information::findOrFail($id);

        $Information->update($validatedData);

        return to_route('Information.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Information::findOrFail($id)->delete();
        return to_route('Information.index');
    }
}
