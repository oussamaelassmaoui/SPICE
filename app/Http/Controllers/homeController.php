<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(Request $request){
        $totalCartCount = 0; // Default value
        if ($request->user()) {
            $totalCartCount = $request->user()->cartItems()->count();
        }
        $Articles=Article::all();
        $Categories=Category::all();
        $products=Product::all();
        return view('pages.home' , compact('Categories','products','totalCartCount', 'Articles'));
       }
}
