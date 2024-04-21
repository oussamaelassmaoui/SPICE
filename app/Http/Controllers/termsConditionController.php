<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Setting;
use App\Models\Information;
use Illuminate\Http\Request;
use App\Models\termsCondition;

class termsConditionController extends Controller
{
    public function index(Request $request){
        $totalCartCount = 0; // Default value
        if ($request->user()) {
            $totalCartCount = $request->user()->cartItems()->count();
        }
        $Information=Information::paginate(1);
        $termsCondition = termsCondition::paginate(1);
        $Settings=Setting::paginate(1);
        $footers=Article::paginate(2);
        return view('pages.terms_condition',compact('totalCartCount','Information','termsCondition',"Settings","footers"));
       }
}
