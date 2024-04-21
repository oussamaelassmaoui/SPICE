<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function __construct()
    {

       $this->middleware(['auth','role:admin'])->except('show');
       // ila knti user ghzdi tchof gha about bohdha
       // user->  about
       // admin -> all

   }
    public function index()
    {
        $Articles=Article::all();
        return view('Articles.index' , compact('Articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Categories=Category::all();
        return view('Articles.create',compact('Categories'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'=> 'required',
            'slug'=> 'required',
            'text1'=> 'required',
            'text2'=> 'required',
            'text3'=> 'required',
            'photo1'=> 'nullable|image|mimes:png,jpg|max:2048',
            'image'=> 'nullable|image|mimes:png,jpg|max:2048',
            'photo3'=> 'nullable|image|mimes:png,jpg|max:2048',
            'category_id'=>'required',
        ]);

        // $validatedData=$request->all();
        $validatedData['user_id'] = Auth::id();

         // Handle photo1 upload
        if ($request->hasFile('photo1')) {
            $photoPath1 = $request->file('photo1')->store('Articles', 'public');
            $validatedData['photo1'] = $photoPath1;
        }
        if ($request->hasFile('image')) {
            $photoPath2 = $request->file('image')->store('Articles', 'public');
            $validatedData['image'] = $photoPath2;
        }
        if ($request->hasFile('photo3')) {
            $photoPath3 = $request->file('photo3')->store('Articles', 'public');
            $validatedData['photo3'] = $photoPath3;
        }
        Article::create($validatedData);
    
        return redirect()->route('Articles.index');
    }
    
      /**
     * Display the specified resource.
      */

    public function show(Request $request,string $id)
    {
        $Categories=Category::all();
        // $Categories = Category::withCount('Category')->get();
        $Post=Article::paginate(4);
        $Article = Article::findOrFail($id);
        $totalCartCount = 0; 
        if ($request->user()) {
            $totalCartCount = $request->user()->cartItems()->count();
        }
        $Settings=Setting::paginate(1);
        $footers=Article::paginate(2);
        $Information=Information::paginate(1);
        return view('Articles.show', compact('Article','footers','Post','Categories', 'totalCartCount','Information','Settings')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Article = Article::findOrFail($id);
        $Categories = Category::all();
        return view('Articles.edit', compact('Article','Categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $validatedData=$request->validate([
            'title'=> 'required',
            'slug'=> 'required',
            'text1'=> 'required',
            'text2'=> 'required',
            'text3'=> 'required',
            'photo1'=> 'nullable|image|mimes:png,jpg|max:2048',
            'image'=> 'nullable|image|mimes:png,jpg|max:2048',
            'photo3'=> 'nullable|image|mimes:png,jpg|max:2048',
            'category_id'=>'required',
        ]);
        $validatedData['user_id'] = Auth::id();
        $Article=Article::findOrFail($id);
        if($request->hasFile('photo1')){
            $photoPath1 = $request->file('photo1')->store('Articles','public');
            $validatedData['photo1']=$photoPath1;
        }
        if($request->hasFile('image')){
            $photoPath2 = $request->file('image')->store('Articles','public');
            $validatedData['image']=$photoPath2;
        }
        if($request->hasFile('photo3')){
            $photoPath3 = $request->file('photo3')->store('Articles','public');
            $validatedData['photo3']=$photoPath3;
        }
        $Article->update($validatedData);
     
        return to_route('Articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Article::findOrFail($id)->delete();
        return to_route('Articles.index');
    }
}
