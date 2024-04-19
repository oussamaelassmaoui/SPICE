<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Product;
use App\Models\Reservation;
use Illuminate\Http\Request;

class RESERVATIONSController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $totalCartCount = 0; // Default value
        if ($request->user()) {
            $totalCartCount = $request->user()->cartItems()->count();
        }
        $Articles=Article::all();
        $products=Product::all();
        return view('pages.RESERVATIONS',compact('totalCartCount', 'Articles', 'products'));
    }
    public function list()
    {
        $Reservations=Reservation::all();
        return view('Reservations.index',compact('Reservations'));
    }
    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        
        return view("Reservations.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'Phone' => 'required',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required',
            'Person' => 'required',
            'message' => 'required',  
        ]);
        Reservation::create($validatedData);
        return redirect()->back();
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
        $Reservation = Reservation::findOrFail($id);
        return view('Reservations.edit', compact('Reservation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'Phone' => 'required',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required',
            'Person' => 'required',
            'message' => 'required',
            
           
        ]);
         
        $Reservation=Reservation::findOrFail($id);

        $Reservation->update($validatedData);
        return redirect()->route('Reservations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Reservation::findOrFail($id)->delete();
        return redirect()->back();
    }
}
