<?php

namespace App\Http\Controllers;

use App\Models\chef;
use Illuminate\Http\Request;

class chefController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chefs=chef::all();
        return view('chefs.index' , compact('chefs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {  
        return view('chefs.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'nullable', 
            'photo'=> 'nullable',
            'photo1'=> 'nullable', 
            'photo2'=> 'nullable',
            'photo3'=> 'nullable', 
            'photo4'=> 'nullable', 
            'About_Me'=> 'nullable',
            'Mobile'=> 'nullable', 
            'Facebook'=> 'nullable',
            'Twitter'=> 'nullable', 
            'youtube'=> 'nullable', 
            'instagram'=> 'nullable',
            'address'=> 'nullable', 
            'email'=> 'nullable',
            'PERSONAL_INFORMATION'=> 'nullable', 
            'PROFESSIONAL_SKILLS'=> 'nullable', 
            'GENERAL_KNOWLEDGE'=> 'nullable',
            'SIGNATURE_DISHES'=> 'nullable', 
            'CUSTOMER_SATISFIED'=> 'nullable',
            'COMMUNICATION_SKILLS'=> 'nullable', 
            'DISH1'=> 'nullable', 
            'DISH2'=> 'nullable',
            'DISH3'=> 'nullable', 
            'DISH4'=> 'nullable',
            
        ]);

        // $validatedData=$request->all();
       

         // Handle photo1 upload
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('chefs', 'public');
            $validatedData['photo'] = $photoPath;
        }
        if ($request->hasFile('photo1')) {
            $photoPath1 = $request->file('photo1')->store('chefs', 'public');
            $validatedData['photo1'] = $photoPath1;
        }
        if ($request->hasFile('photo2')) {
            $photoPath2 = $request->file('photo2')->store('chefs', 'public');
            $validatedData['photo2'] = $photoPath2;
        }
        if ($request->hasFile('photo3')) {
            $photoPath3 = $request->file('photo3')->store('chefs', 'public');
            $validatedData['photo3'] = $photoPath3;
        }
        if ($request->hasFile('photo4')) {
            $photoPath4 = $request->file('photo4')->store('chefs', 'public');
            $validatedData['photo4'] = $photoPath4;
        }
        chef::create($validatedData);
    
        return redirect()->route('chefs.index');
    }
    
      /**
     * Display the specified resource.
      */

    public function show(Request $request,string $id)
    {
        
        // $Categories = Category::withCount('Category')->get();
        $Post=chef::paginate(4);
        $chef = chef::findOrFail($id);
        $totalCartCount = 0; 
        if ($request->user()) {
            $totalCartCount = $request->user()->cartItems()->count();
        }
        return view('chefs.show', compact('chef','Post','Categories', 'totalCartCount')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $chef = chef::findOrFail($id);
     
        return view('chefs.edit', compact('chef'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $validatedData=$request->validate([
            'name' => 'nullable', 
            'photo'=> 'nullable',
            'photo1'=> 'nullable', 
            'photo2'=> 'nullable',
            'photo3'=> 'nullable', 
            'photo4'=> 'nullable', 
            'About_Me'=> 'nullable',
            'Mobile'=> 'nullable', 
            'Facebook'=> 'nullable',
            'Twitter'=> 'nullable', 
            'youtube'=> 'nullable', 
            'instagram'=> 'nullable',
            'address'=> 'nullable', 
            'email'=> 'nullable',
            'PERSONAL_INFORMATION'=> 'nullable', 
            'PROFESSIONAL_SKILLS'=> 'nullable', 
            'GENERAL_KNOWLEDGE'=> 'nullable',
            'SIGNATURE_DISHES'=> 'nullable', 
            'CUSTOMER_SATISFIED'=> 'nullable',
            'COMMUNICATION_SKILLS'=> 'nullable', 
            'DISH1'=> 'nullable', 
            'DISH2'=> 'nullable',
            'DISH3'=> 'nullable', 
            'DISH4'=> 'nullable',
            
        ]);
       
        $chef=chef::findOrFail($id);
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('chefs', 'public');
            $validatedData['photo'] = $photoPath;
        }
        if ($request->hasFile('photo1')) {
            $photoPath1 = $request->file('photo1')->store('chefs', 'public');
            $validatedData['photo1'] = $photoPath1;
        }
        if ($request->hasFile('photo2')) {
            $photoPath2 = $request->file('photo2')->store('chefs', 'public');
            $validatedData['photo2'] = $photoPath2;
        }
        if ($request->hasFile('photo3')) {
            $photoPath3 = $request->file('photo3')->store('chefs', 'public');
            $validatedData['photo3'] = $photoPath3;
        }
        if ($request->hasFile('photo4')) {
            $photoPath4 = $request->file('photo4')->store('chefs', 'public');
            $validatedData['photo4'] = $photoPath4;
        }
        $chef->update($validatedData);
     
        return to_route('chefs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        chef::findOrFail($id)->delete();
        return to_route('chefs.index');
    }
}
