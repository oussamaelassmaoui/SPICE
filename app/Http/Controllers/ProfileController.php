<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Article;
use App\Models\Product;
use App\Models\Setting;
use App\Models\OrderItem;
use Illuminate\View\View;
use App\Models\Information;
use Illuminate\Http\Request;
use LamaLama\Wishlist\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request): View
    {
        $totalCartCount = 0; // Default value
        if ($request->user()) {
            $totalCartCount = $request->user()->cartItems()->count();
        }
        $Information=Information::paginate(1);
        $Settings=Setting::paginate(1);
        $footers=Article::paginate(2);
        $total_order = $request->user()->orderItems()->with('Order')->count();
        $Total_wishlist =$request->user()->wishlistItems()->with('product')->count();
        return view('profile.profile', [
            'user' => $request->user()
        ],compact('totalCartCount','Information',"Settings","footers", "total_order", "Total_wishlist"));
    }

    public function update_password(Request $request): View
    {
        $totalCartCount = 0; // Default value
        if ($request->user()) {
            $totalCartCount = $request->user()->cartItems()->count();
        }
        $Information=Information::paginate(1);
        $Settings=Setting::paginate(1);
        $footers=Article::paginate(2);
        return view('profile.update-password', [
            'user' => $request->user(),
        ],compact('totalCartCount', 'Information',"Settings","footers")) ;
    }

    public function delete_user(Request $request): View
    {
        $totalCartCount = 0; // Default value
        if ($request->user()) {
            $totalCartCount = $request->user()->cartItems()->count();
        }
        $Settings=Setting::paginate(1);
        $footers=Article::paginate(2);
        $Information=Information::paginate(1);
        return view('profile.delete-user', [
            'user' => $request->user(),
        ],compact('totalCartCount', 'Information',"Settings","footers")) ;
    }

    public function My_Orders(Request $request): View
    {   
        $orders = Order::all();
        // $OrderItems =OrderItem::all();
        $totalCartCount = 0; // Default value
        if ($request->user()) {
            $totalCartCount = $request->user()->cartItems()->count();
        }
        $Information=Information::paginate(1);
        $Settings=Setting::paginate(1);
        $footers=Article::paginate(2);
        $OrderItems = $request->user()->orderItems()->with('Order')->latest()->paginate(10);
        return view('profile.My_Orders', compact('orders','OrderItems','totalCartCount','Information',"Settings","footers")
        
    );
    }
    
    public function order_invoice(Request $request, string $id): View
{
    // Fetch the order with the provided ID
    $order = Order::find($id);
    
    // Check if the order exists
    if (!$order) {
        // Handle the case where the order doesn't exist, perhaps return an error response
        // For example:
        abort(404, 'Order not found');
    }

    // Retrieve order items related to the provided order ID for the authenticated user
    $OrderItems = $request->user()->orderItems()->where('order_id', $id)->get();
    
    // You can include additional logic here if needed, such as calculating totals, etc.

    // Load other necessary data
    $totalCartCount = 0; // Default value
        if ($request->user()) {
            $totalCartCount = $request->user()->cartItems()->count();
        }
    $Information=Information::paginate(1);
    $Settings=Setting::paginate(1);
    $footers=Article::paginate(2);
    $orders = Order::all(); // I'm assuming you might need this for something else in your view

    // Pass the data to the view
    return view('profile.order_invoice', compact('orders', 'OrderItems', 'totalCartCount', 'order', 'Information',"Settings","footers"));
}

    

    // public function Wish_List(Request $request): View
    // {
    //     $wishlistItems = Wishlist::get();
    //     return view('profile.Wish_List',compact('wishlistItems'), [
    //         'user' => $request->user(),
    //     ]);
    // }
    

    public function edit(Request $request): View
    {
        $totalCartCount = 0; // Default value
        if ($request->user()) {
            $totalCartCount = $request->user()->cartItems()->count();
        }
        $Information=Information::paginate(1);
        $Settings=Setting::paginate(1);
        $footers=Article::paginate(2);
        return view('profile.edit', [
            'user' => $request->user(),
        ],compact('totalCartCount', 'Information',"Settings","footers"));
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }
       
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
        
            // Generate a unique filename
            $imageName = time() . '.' . $photo->getClientOriginalExtension();
        
            // Store the image in the public/storage directory
            $photo->storeAs('profile_pictures', $imageName, 'public');
        
            // Update user record with the image path
            $user = $request->user();
            $user->photo = $imageName;
            $user->save();
        }
        
        

        $request->user()->save();

        return Redirect::route('profile')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
