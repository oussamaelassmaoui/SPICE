<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Product;
use App\Models\Setting;
use App\Models\CartItem;
use App\Models\Information;
use App\Models\SettingHome;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function addToCart(Request $request, Product $product)
    {

        $cartItem = new CartItem([
            'user_id' => auth()->id(),
            'product_id' => $product->id,
            'quantity' => $request->input('quantity', 1),
            'size' => $request->input('size'),
            'option' => $request->input('option'),
           
        ]);
        // $cartItem = auth()->user()->cartItems()->get();

        $cartItem->save();

        return redirect()->back()->with('success', 'Product added to cart');
    }
    public function update(Request $request, CartItem $cartItem)
{
    $cartItem->update([
        'quantity' => $request->input('quantity'),
        
]);
    return redirect()->route('cart.index')->with('success', 'Quantity updated');
}

    public function index(Request $request)
    {
      
        $totalCartCount = 0; // Default value
        if ($request->user()) {
            $totalCartCount = $request->user()->cartItems()->count();
        }
        $cartItems = $request->user()->cartItems()->with('product')->get();
        $totalCost = $cartItems->sum(function ($cartItem) {
            return $cartItem->quantity * $cartItem->product->price;
        });
        $Information=Information::paginate(1);
        $Homes=SettingHome::paginate(1);
        $Settings=Setting::paginate(1);
        $footers=Article::paginate(2);
        return view('cart.index', compact('cartItems', 'totalCost','totalCartCount',"Information", "Homes", "Settings","footers"));


    }
    public function remove(CartItem $cartItem)
   {
    $cartItem->delete();
    return redirect()->route('cart.index')->with('success', 'Item removed from cart');
   }
}
