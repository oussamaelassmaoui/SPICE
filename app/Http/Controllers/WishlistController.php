<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Wishlist;
use App\Models\Information;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $totalCartCount = 0; // Default value
        if ($request->user()) {
            $totalCartCount = $request->user()->cartItems()->count();
        }
        $Information=Information::paginate(1);
        $Settings=Setting::paginate(1);
        $footers=Article::paginate(2);
    // $wishlistItems = Wishlist::with('product')->get();
    $wishlistItems =$request->user()->wishlistItems()->with('product')->latest()->paginate(21);
    return view('profile.Wish_List', compact('wishlistItems', 'totalCartCount', 'Information',"Settings","footers"));
    }
    public function addToWishlist(Product $product)
    {
        

        $wishlistItem = new Wishlist();
        $wishlistItem->user_id = auth()->id();
        $wishlistItem->product_id = $product->id;
       
        $wishlistItem->save();

        return redirect()->back()->with('success', 'Product added to wishlist!');
    }

    public function removeFromWishlist(Wishlist $Wishlist)
    {
        $Wishlist->delete();

        return redirect()->back()->with('success', 'Product removed from wishlist!');
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
