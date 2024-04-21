<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\SettingHome;
use Illuminate\Http\Request;

class SettingHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $Homes=SettingHome::all();
        return view('Home.index',compact('Homes')); 
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Home.create');
    }
    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'DELICIOUS_FOOD'=> 'required',
        'banner_Global'=> 'nullable',
        'photo_Global'=> 'nullable',
        'banner1'=> 'nullable',
        'title1'=> 'required',
        'banner2'=> 'nullable',
        'title2'=> 'required',
        'TODAY_SPECIAL_OFFER'=> 'required',
        'banner_TODAY'=> 'nullable',
        'photo1'=> 'nullable',
        'Download'=> 'required',
        'photo_Download1'=> 'nullable',
        'url_video'=> 'required',
        'banner_testimonials'=> 'nullable',
        ]);
        if($request->hasFile('banner_Global')){
            $photoPath2 = $request->file('banner_Global')->store('Home','public');
            $validatedData['banner_Global']=$photoPath2;
        }
        if($request->hasFile('photo_Global')){
            $photoPath = $request->file('photo_Global')->store('Home','public');
            $validatedData['photo_Global']=$photoPath;
        }
        if($request->hasFile('banner1')){
            $photoPath3 = $request->file('banner1')->store('Home','public');
            $validatedData['banner1']=$photoPath3;
        }
        if($request->hasFile('banner2')){
            $photoPath4 = $request->file('banner2')->store('Home','public');
            $validatedData['banner2']=$photoPath4;
        }
        if($request->hasFile('banner_TODAY')){
            $photoPath5 = $request->file('banner_TODAY')->store('Home','public');
            $validatedData['banner_TODAY']=$photoPath5;
        }
        if($request->hasFile('photo1')){
            $photoPath6 = $request->file('photo1')->store('Home','public');
            $validatedData['photo1']=$photoPath6;
        }
       
        
        if($request->hasFile('photo_Download1')){
            $photoPath9 = $request->file('photo_Download1')->store('Home','public');
            $validatedData['photo_Download1']=$photoPath9;
        }
       
        if($request->hasFile('banner_testimonials')){
            $photoPath11= $request->file('banner_testimonials')->store('Home','public');
            $validatedData['banner_testimonials']=$photoPath11;
        }
       

        // $validatedData=$request->all();


        // Handle photo1 upload

        SettingHome::create($validatedData);

        return redirect()->route('Home.index');
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
        $Home = SettingHome::findOrFail($id);

        return view('Home.edit', compact('Home'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
        'DELICIOUS_FOOD'=> 'required',
        'banner_Global'=> 'nullable',
        'photo_Global'=> 'nullable',
        'banner1'=> 'nullable',
        'title1'=> 'required',
        'banner2'=> 'nullable',
        'title2'=> 'required',
        'TODAY_SPECIAL_OFFER'=> 'required',
        'banner_TODAY'=> 'nullable',
        'photo1'=> 'nullable',
        'Download'=> 'required',
        'photo_Download1'=> 'nullable',
        'url_video'=> 'required',
        'banner_testimonials'=> 'nullable',
        ]);
        if($request->hasFile('banner_Global')){
            $photoPath2 = $request->file('banner_Global')->store('Home','public');
            $validatedData['banner_Global']=$photoPath2;
        }
        if($request->hasFile('photo_Global')){
            $photoPath = $request->file('photo_Global')->store('Home','public');
            $validatedData['photo_Global']=$photoPath;
        }
        if($request->hasFile('banner1')){
            $photoPath3 = $request->file('banner1')->store('Home','public');
            $validatedData['banner1']=$photoPath3;
        }
        if($request->hasFile('banner2')){
            $photoPath4 = $request->file('banner2')->store('Home','public');
            $validatedData['banner2']=$photoPath4;
        }
        if($request->hasFile('banner_TODAY')){
            $photoPath5 = $request->file('banner_TODAY')->store('Home','public');
            $validatedData['banner_TODAY']=$photoPath5;
        }
        if($request->hasFile('photo1')){
            $photoPath6 = $request->file('photo1')->store('Home','public');
            $validatedData['photo1']=$photoPath6;
        }
        if($request->hasFile('photo_Download1')){
            $photoPath9 = $request->file('photo_Download1')->store('Home','public');
            $validatedData['photo_Download1']=$photoPath9;
        }
        if($request->hasFile('banner_testimonials')){
            $photoPath11= $request->file('banner_testimonials')->store('Home','public');
            $validatedData['banner_testimonials']=$photoPath11;
        }
       

        $Home = SettingHome::findOrFail($id);

        $Home->update($validatedData);

        return to_route('Home.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        SettingHome::findOrFail($id)->delete();
        return to_route('Home.index');
    }
}
