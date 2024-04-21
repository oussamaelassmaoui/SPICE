<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\contact;
use App\Models\Setting;
use App\Models\Information;
use Illuminate\Http\Request;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
     
        $this->middleware(['auth','role:admin'])->except(['create','store']);
       
    }
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
        $Settings=Setting::paginate(1);
        $footers=Article::paginate(2);
        $Information=Information::paginate(1);
        return view('pages.contact',compact('totalCartCount', 'Information', 'Settings','footers'));
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
    public function destroyAll()
    {
        contact::truncate(); // Delete all records from the faqs table
      
        return redirect()->route('contact.index');
    }
    public function destroy(string $id)
    {
        contact::findOrFail($id)->delete();
        return redirect()->back();
    }
}
