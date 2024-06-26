<?php

namespace App\Http\Controllers;

use App\Models\size;
use App\Models\option;
use App\Models\Review;
use App\Models\Article;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
       $this->middleware(['auth','role:admin'])->except('show','search');
   }
    public function index()
    {
        $products = Product::all();
        // $Reviews=Review::all();
        // $productsWithReviewCount = Product::withCount('review')->limit(1)->get();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Categorys = Category::all();
        $sizes=size::all();
        $options=option::all();
        return view("products.create", compact('Categorys', 'sizes','options'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required',
            'price' => 'nullable',
            'description' => 'nullable',
            'old_price' => 'required',
            'photo' => 'nullable',
            'quantity' => 'required',
            'category_id' => 'required',
            'images.*' => 'nullable',
            'sizes.*' => 'nullable|string|max:255',
            'options.*' => 'nullable|string|max:255',
           
        ]);

        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('products','public');
            $validatedData['photo']=$photoPath;
        }
  
        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('products', 'public');
                $imagePaths[] = $imagePath;
            }
        
            // Add the image paths to the validated data
            $validatedData['images'] = json_encode($imagePaths);
        }


        


        $Product = Product::create($validatedData);

       
        
        if ($request->filled('sizes')) {
            $sizes = $request->input('sizes');
            $Product->sizes()->attach($sizes);
        }
        
        if ($request->filled('options')) {
            $options = $request->input('options');
            $Product->options()->attach($options);
        }

        return redirect()->route('products.index');
    }
    public function search(Request $request){
        $totalCartCount = 0; // Default value
        if ($request->user()) {
            $totalCartCount = $request->user()->cartItems()->count();
        }
        $products=Product::paginate(20);
        $RECENT_PRODUCTS=Product::paginate(4);
        $Information=Information::paginate(1);
        $Settings=Setting::paginate(1);
        $footers=Article::paginate(2);
        $search =  $request->input('search');
        $products= Product::where(function($query) use($search){
            $query->where('name', 'like', "%$search%");
        })->get();
        $totalCartCount = 0; // Default value
        $Categories=Category::all();
        return view('pages.search_product',compact('products', 'RECENT_PRODUCTS','totalCartCount', 'Information', 'Settings','footers','search','products','Categories'));
     
      
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
        $product = Product::find($id);
        $product->load('sizes');
        $product->load('options');
        $Reviews = Review::where('product_id', $id)->get();
        $productsWithReviewCount = Review::where('product_id', $id)->count();
        $Categories=Category::all();
        $RECENT_PRODUCTS=Product::latest()->paginate(14);
        $Information=Information::paginate(1);
        $Settings=Setting::paginate(1);
        $footers=Article::paginate(2);
        return view('products.show', compact('product', 'RECENT_PRODUCTS', 'Categories',
         'productsWithReviewCount','Reviews','totalCartCount','Information',"Settings","footers"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $Categorys = Category::all();
        // $options=option::all();
        // $sizes=Size::all();
        return view('products.edit', compact('product', 'Categorys'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required',
            'price' => 'nullable',
            'description' => 'nullable',
            'old_price' => 'required',
            'photo' => 'nullable',
            'quantity' => 'required',
            'category_id' => 'required',
            'images.*' => 'nullable',
            'sizes.*' => 'nullable|string|max:255',
            'options.*' => 'nullable|string|max:255',
           
        ]);

        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('products','public');
            $validatedData['photo']=$photoPath;
        }
  
        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
               
                $imagePath = $image->store('products', 'public');
                $imagePaths[] = $imagePath;
            }
        
            // Add the image paths to the validated data
            $validatedData['images'] = json_encode($imagePaths);
        }


        
        $Product=Product::findOrFail($id);

        $Product->update($validatedData);

       
        
        if ($request->filled('sizes')) {
            $sizes = $request->input('sizes');
            $Product->sizes()->attach($sizes);
        }
        
        if ($request->filled('options')) {
            $options = $request->input('options');
            $Product->options()->attach($options);
        }

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::findOrFail($id)->delete();
        return to_route('products.index');
    }
}
