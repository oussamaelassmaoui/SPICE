<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    public function __construct()
    {
     
        $this->middleware(['auth','role:admin']);
       
    }
    public function index()
    {
        $visits = Visit::latest()->get(); // Get all visits, ordered by the latest
        $totalVisits = Visit::count(); // Get the total number of visits
        return view('visits.index', compact('visits', 'totalVisits'));
    }
}
