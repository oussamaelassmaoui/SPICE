<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class privacyPolicyController extends Controller
{
    public function index(Request $request){
        $totalCartCount = 0; // Default value
        if ($request->user()) {
            $totalCartCount = $request->user()->cartItems()->count();
        }
        return view('pages.privacy_policy',compact('totalCartCount'));
       }
}
