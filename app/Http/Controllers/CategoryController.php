<?php

namespace App\Http\Controllers;


use App\Models\Article;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Information;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function __construct()
    // {
     
    //     $this->middleware(['auth','role:admin']);
       
    // }
    public function index()
    {
        $Categories=Category::all();
        // $Settings = Setting::paginate(1);
        return view('Categories.index' , compact('Categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Categories.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'required',
            'photo' =>'nullable|max:2048',
        ]);
        
        
        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('Categories','public');
            $validatedData['photo']=$photoPath;
        }
  
        Category::create($validatedData);
    
        return redirect()->route('Categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request ,string $id)
    {
        $totalCartCount = 0; // Default value
        if ($request->user()) {
            $totalCartCount = $request->user()->cartItems()->count();
        }
        $category = Category::findOrfail($id);
        
        $products =  $category->product()->get();
        $Categories=Category::all();
        $Information=Information::paginate(1);
        $Settings=Setting::paginate(1);
        $footers=Article::paginate(2);
       return view('Categories.show', compact('category','products', 'Categories', 'totalCartCount' ,'Information', 'footers','Settings'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Categorie = Category::findOrFail($id);
        return view('Categories.edit', compact('Categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'name'=> 'required',
            'photo' =>'nullable|max:2048',
           

        ]);
        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('Categories','public');
            $validatedData['photo']=$photoPath;
        }
        $Categorie=Category::findOrFail($id);
        $Categorie->update($validatedData);
     
        return to_route('Categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::findOrFail($id)->delete();
        return to_route('Categories.index');
    }
}
