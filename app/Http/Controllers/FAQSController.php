<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;

class FAQSController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {

        $this->middleware(['auth','role:admin']);

    }

    public function index()
    {
        //
        $Faqs = FAQ::all();
        return view('faqs.index', compact('Faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $Faqs = new FAQ();
        $isUpdate = false;
        return view('faqs.form', compact('Faqs', 'isUpdate'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        FAQ::create($request->all());
        return to_route('faqs.index');
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
        //
        $Faq = FAQ::findOrFail($id);
        $isUpdate = true;
        return view('faqs.form', compact('Faq', 'isUpdate'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $Faq = FAQ::findOrFail($id);
        $Faq->update($request->all());
        return to_route('faqs.index');

    }
    public function destroyAll()
    {
        FAQ::truncate(); // Delete all records from the faqs table
      
        return redirect()->route('faqs.index');
    }
    public function destroy(string $id)
    {
        //
        $Faq=FAQ::findOrFail($id);
        $Faq->delete();
       
        return to_route('faqs.index');
    }
}
