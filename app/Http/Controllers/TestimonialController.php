<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function __construct()
    {
     
        $this->middleware(['auth','role:admin']);
       
    }
    public function index()
    {
     
        $Testimonials=Testimonial::all();
        return view('Testimonial.index' , compact('Testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        return view('Testimonial.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'required',
            'photo'=> 'nullable|image|mimes:png,jpg|max:2048',
            'text'=> 'required',
           
        ]);
        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('Testimonial','public');
            $validatedData['photo']=$photoPath;
        }
        

  
        Testimonial::create($validatedData);
    
        return redirect()->route('Testimonial.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $Testimonial=Testimonial::paginate(2);
        // $Post=Testimonial::paginate(4);
        // $Testimonial = Testimonial::findOrFail($id);
        // return view('Testimonial.show', compact('Testimonial','Testimonial','Post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       
        $Testimonial = Testimonial::findOrFail($id);
        return view('Testimonial.edit', compact('Testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'name'=> 'required',
            'photo'=> 'nullable|image|mimes:png,jpg|max:2048',
            'text'=> 'required',
        ]);
        $Testimonial=Testimonial::findOrFail($id);
        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('Testimonial','public');
            $validatedData['photo']=$photoPath;
        }
        $Testimonial->update($validatedData);
     
        return to_route('Testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Testimonial::findOrFail($id)->delete();
        return to_route('Testimonial.index');
    }
}
