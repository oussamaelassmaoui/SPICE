<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Setting;
use App\Models\Services;
use App\Models\Information;
use Illuminate\Http\Request;

class SERVICESController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $SERVICES=Services::all();
        return view('SERVICES.index',compact('SERVICES'));
    }

    public function list(Request $request)
    {
        $totalCartCount = 0; // Default value
        if ($request->user()) {
            $totalCartCount = $request->user()->cartItems()->count();
        }
        $Information=Information::paginate(1);
        $SERVICES=Services::all();
        $Settings=Setting::paginate(1);
        $footers=Article::paginate(2);
        return view('pages.SERVICES',compact('totalCartCount','SERVICES','Information',"Settings","footers"));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view("SERVICES.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            
            'title' => 'nullable', 
            'photo' => 'nullable',
            'text'  => 'nullable', 
            'text2' => 'nullable',
            'text3' => 'nullable', 
            'FAQ1'  => 'nullable',
            'FAQ2'  => 'nullable', 
            'FAQ3'  => 'nullable',
            'FAQ4'  => 'nullable', 
            'FAQ5'  => 'nullable',
            'rep1'  => 'nullable', 
            'rep2'  => 'nullable',
            'rep3'  => 'nullable',
            'rep4'  => 'nullable', 
            'rep5'  => 'nullable',
        ]);
        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('Services','public');
            $validatedData['photo']=$photoPath;
        }
        Services::create($validatedData);
        return redirect()->route('SERVICES.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request,string $id)
    {
        $totalCartCount = 0; // Default value
        if ($request->user()) {
            $totalCartCount = $request->user()->cartItems()->count();
        }
        $Information=Information::paginate(1);
        $SERVICES = Services::find($id);
        $Categories=Services::paginate(6);
        $Settings=Setting::paginate(1);
        $footers=Article::paginate(2);
        return view('SERVICES.show', compact('SERVICES','totalCartCount', 'Categories', 'Information',"Settings","footers"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $SERVICES = Services::findOrFail($id);
        return view('SERVICES.edit', compact('SERVICES'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
              
            'title' => 'nullable', 
            'photo' => 'nullable',
            'text'  => 'nullable', 
            'text2' => 'nullable',
            'text3' => 'nullable', 
            'FAQ1'  => 'nullable',
            'FAQ2'  => 'nullable', 
            'FAQ3'  => 'nullable',
            'FAQ4'  => 'nullable', 
            'FAQ5'  => 'nullable',
            'rep1'  => 'nullable', 
            'rep2'  => 'nullable',
            'rep3'  => 'nullable',
            'rep4'  => 'nullable', 
            'rep5'  => 'nullable',
            
           
        ]);
        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('Services','public');
            $validatedData['photo']=$photoPath;
        }
        $SERVICES=Services::findOrFail($id);

        $SERVICES->update($validatedData);
        return redirect()->route('SERVICES.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Services::findOrFail($id)->delete();
        return redirect()->back();
    }
}
