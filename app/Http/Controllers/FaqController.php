<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faq::latest()->get();
        return view('backend.faq.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:faqs',
            'description'  => 'required|string',
            'status'  => 'required|boolean',
        ]);

        // dd($request->all());

        $data = $request->all();

        Faq::create($data);

        $notifications = array(
            'messege' => 'Faq created successfully!!',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.faqs.index')->with($notifications);
    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq)
    {
        return view('backend.faq.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  Faq $faq)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:faqs,title,'. $faq->id,
            'description'  => 'required|string',
            'status'  => 'required|boolean',
        ]);

        // dd($request->all());

        $data = [];
        $data = $request->all();


        $faq->update($data);

        $notifications = array(
            'messege' => 'Faq updated successfully!!',
            'alert-type' => 'info',
        );
        return redirect()->route('admin.faqs.index')->with($notifications);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        $notifications = array(
            'messege' => 'Faq deleted successfully!!',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notifications);
    }


}
