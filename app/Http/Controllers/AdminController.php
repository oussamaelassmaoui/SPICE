<?php

namespace App\Http\Controllers;

use App\Models\chef;
use App\Models\Order;
use App\Models\Visit;
use App\Models\Review;
use App\Models\Article;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // public function AdminDashboard(){
    //     return view('admin.dashboard');
    //    }
       public function __construct()
       {
        
           $this->middleware(['auth','role:admin']);
          
       }
       public function AdminDashboard(){
        //  $Settings = Setting::paginate(1);
         $visits = Visit::latest()->paginate(5);
         $totalVisits = Visit::count();
         $totalProduct= Product::count();
         $totalArticle= Article::count();
         $total_Chef= chef::count();
         $totalOrder= Order::count();
         $totalReview= Review::count();
         return view('admin.dashboard',compact('visits', 'totalVisits','totalProduct','totalArticle','total_Chef','totalOrder','totalReview'));
        }
        public function getVisitChartData()
        {
            $visits = Visit::selectRaw('DATE(created_at) as date, COUNT(*) as count')
                            ->groupBy('date')
                            ->orderBy('date')
                            ->get();
    
            $chartData = [];
            foreach ($visits as $visit) {
                $chartData[$visit->date] = $visit->count;
            }
    
            return response()->json($chartData);
        }
}
