<?php

namespace App\Http\Controllers;

use App\Models\Footergridtwo;
use Illuminate\Http\Request;

class FootergridtwoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footergridtwos = Footergridtwo::latest()->get();
        return view('backend.website-setting.footer-grid-two.index', compact('footergridtwos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.website-setting.footer-grid-two.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:footergridtwos',
            'link' => 'url:http,https',
            'status'  => 'required|boolean',
        ]);
        
        // dd($request->all());

        $data = [];
        $data = $request->all();

        Footergridtwo::create($data);

        $notifications = array(
            'messege' => 'Footer Link created successfully!!',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.footergridtwos.index')->with($notifications);
    }

    /**
     * Display the specified resource.
     */
    public function show(Footergridtwo $footergridtwo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Footergridtwo $footergridtwo)
    {
        return view('backend.website-setting.footer-grid-two.edit', compact('footergridtwo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Footergridtwo $footergridtwo)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:footergridtwos,name,'. $footergridtwo->id,
            'link' => 'url:http,https',
            'status'  => 'required|boolean',
        ]);

        // dd($request->all());

        $data = [];
        $data = $request->all();

        $footergridtwo->update($data);

        $notifications = array(
            'messege' => 'Footer Link updated successfully!!',
            'alert-type' => 'info',
        );
        return redirect()->route('admin.footergridtwos.index')->with($notifications);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Footergridtwo $footergridtwo)
    {
        $footergridtwo->delete();
        $notifications = array(
            'messege' => 'Footer Link deleted successfully!!',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notifications);
    }
}
