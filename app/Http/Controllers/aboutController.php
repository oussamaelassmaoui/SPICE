<?php

namespace App\Http\Controllers;

use App\Models\chef;
use App\Models\about;
use App\Models\Article;
use App\Models\Setting;
use App\Models\Information;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function list(Request $request) {
        $totalCartCount = 0; // Default value
        if ($request->user()) {
            $totalCartCount = $request->user()->cartItems()->count();
        }
        $chefs=chef::paginate(4);
        $Articles=Article::paginate(3);
        $Information=Information::paginate(1);
        $Testimonials=Testimonial::all();
        $abouts=about::paginate(1);
        $Settings=Setting::paginate(1);

        $footers=Article::paginate(2);
        return view('pages.about',compact('totalCartCount','footers','chefs','Articles', 'Information', 'Testimonials','abouts','Settings'));
    }
    
    public function index()
    {
      $abouts=about::all();
        return view('about.index',compact('abouts')); 
    }
    
 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('about.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ABOUT_US'=> 'required',
            'WHY_CHOOSE_US'=> 'required',
            'QUALITY_CHEFS'=> 'required',
            'SUPER_FAST_DELIVERY'=> 'required',
            'TABLE_RESERVATION'=> 'required',
            'ONLINE_ORDER'=> 'required',
            'menu'=> 'required',
            'banner_about_menu'=> 'nullable',
            'photo'=> 'nullable',
            'url_video'=> 'required',
            
           
        ]);
        if($request->hasFile('banner_about_menu')){
            $photoPath2 = $request->file('banner_about_menu')->store('about','public');
            $validatedData['banner_about_menu']=$photoPath2;
        }
        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('about','public');
            $validatedData['photo']=$photoPath;
        }

        // $validatedData=$request->all();


        // Handle photo1 upload

        about::create($validatedData);

        return redirect()->route('about.index');
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
        $about = about::findOrFail($id);

        return view('about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'ABOUT_US'=> 'required',
            'WHY_CHOOSE_US'=> 'required',
            'QUALITY_CHEFS'=> 'required',
            'SUPER_FAST_DELIVERY'=> 'required',
            'TABLE_RESERVATION'=> 'required',
            'ONLINE_ORDER'=> 'required',
            'menu'=> 'required',
            'banner_about_menu'=> 'nullable',
            'photo'=> 'nullable',
            'url_video'=> 'required',
        ]);
        if($request->hasFile('banner_about_menu')){
            $photoPath2 = $request->file('banner_about_menu')->store('about','public');
            $validatedData['banner_about_menu']=$photoPath2;
        }
        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('about','public');
            $validatedData['photo']=$photoPath;
        }
        $about = about::findOrFail($id);

        $about->update($validatedData);

        return to_route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        about::findOrFail($id)->delete();
        return to_route('about.index');
    }
}
