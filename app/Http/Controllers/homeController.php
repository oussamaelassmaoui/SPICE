<?php

namespace App\Http\Controllers;

use App\Models\chef;
use App\Models\Article;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Information;
use App\Models\SettingHome;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(Request $request){
        $totalCartCount = 0; // Default value
        if ($request->user()) {
            $totalCartCount = $request->user()->cartItems()->count();
        }
        $totalchef = chef::count();
        $Testimonials=Testimonial::all();
        $Articles=Article::paginate(3);
        $Categories=Category::all();
        $products=Product::paginate(12);
        $chefs=chef::paginate(4);
        $Information=Information::paginate(1);
        $Homes=SettingHome::paginate(1);
        $Settings=Setting::paginate(1);
        $footers=Article::paginate(2);
        return view('pages.home' , compact('Categories','products','totalCartCount', 'Articles', 'chefs',
         'Information','Testimonials','totalchef','Homes','Settings',"footers"));
       }
}
