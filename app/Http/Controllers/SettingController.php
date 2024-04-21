<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $Settings=Setting::all();
        return view('Settings.index',compact('Settings')); 
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Settings.create');
    }
    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'logo'=> 'nullable',
            'banner_Global'=> 'nullable',
            'banner1'=> 'nullable',
            'banner2'=> 'nullable',
            'Sign_In_photo'=> 'nullable',
            'Sign_Up_photo'=> 'nullable',
            'New_Recipes'=> 'required',
        ]);
        if($request->hasFile('banner_Global')){
            $photoPath2 = $request->file('banner_Global')->store('Settings','public');
            $validatedData['banner_Global']=$photoPath2;
        }
        if($request->hasFile('logo')){
            $photoPath = $request->file('logo')->store('Settings','public');
            $validatedData['logo']=$photoPath;
        }
        if($request->hasFile('banner1')){
            $photoPath3 = $request->file('banner1')->store('Settings','public');
            $validatedData['banner1']=$photoPath3;
        }
        if($request->hasFile('banner2')){
            $photoPath4 = $request->file('banner2')->store('Settings','public');
            $validatedData['banner2']=$photoPath4;
        }
        if($request->hasFile('Sign_In_photo')){
            $photoPath5 = $request->file('Sign_In_photo')->store('Settings','public');
            $validatedData['Sign_In_photo']=$photoPath5;
        }
        if($request->hasFile('Sign_Up_photo')){
            $photoPath6 = $request->file('Sign_Up_photo')->store('Settings','public');
            $validatedData['Sign_Up_photo']=$photoPath6;
        }
       
        
      

        // $validatedData=$request->all();


        // Handle photo1 upload

        Setting::create($validatedData);

        return redirect()->route('Settings.index');
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
        $Setting = Setting::findOrFail($id);

        return view('Settings.edit', compact('Settings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'logo'=> 'nullable',
            'banner_Global'=> 'nullable',
            'banner1'=> 'nullable',
            'banner2'=> 'nullable',
            'Sign_In_photo'=> 'nullable',
            'Sign_Up_photo'=> 'nullable',
            'New_Recipes'=> 'required',
        ]);
        if($request->hasFile('banner_Global')){
            $photoPath2 = $request->file('banner_Global')->store('Settings','public');
            $validatedData['banner_Global']=$photoPath2;
        }
        if($request->hasFile('logo')){
            $photoPath = $request->file('logo')->store('Settings','public');
            $validatedData['logo']=$photoPath;
        }
        if($request->hasFile('banner1')){
            $photoPath3 = $request->file('banner1')->store('Settings','public');
            $validatedData['banner1']=$photoPath3;
        }
        if($request->hasFile('banner2')){
            $photoPath4 = $request->file('banner2')->store('Settings','public');
            $validatedData['banner2']=$photoPath4;
        }
        if($request->hasFile('Sign_In_photo')){
            $photoPath5 = $request->file('Sign_In_photo')->store('Settings','public');
            $validatedData['Sign_In_photo']=$photoPath5;
        }
        if($request->hasFile('Sign_Up_photo')){
            $photoPath6 = $request->file('Sign_Up_photo')->store('Settings','public');
            $validatedData['Sign_Up_photo']=$photoPath6;
        }

        $Setting = Setting::findOrFail($id);

        $Setting->update($validatedData);

        return to_route('Settings.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Setting::findOrFail($id)->delete();
        return to_route('Settings.index');
    }
}
