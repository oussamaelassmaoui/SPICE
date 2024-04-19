<?php

namespace App\Http\Controllers;

use App\Models\size;
use App\Models\option;
use App\Models\Review;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        $RECENT_PRODUCTS=Product::paginate(14);
        
        
        return view('products.show', compact('product', 'RECENT_PRODUCTS', 'Categories', 'productsWithReviewCount','Reviews','totalCartCount'));
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
