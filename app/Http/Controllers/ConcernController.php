<?php

namespace App\Http\Controllers;

use App\Models\Concern;
use Illuminate\Http\Request;
use App\Http\Traits\ImageUpload;

class ConcernController extends Controller
{

    use ImageUpload;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $concerns = Concern::latest()->get();
        return view('backend.home.concern.index', compact('concerns'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.home.concern.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:webp,jpeg,png,jpg,svg|max:2048',
            'title' => 'required|string|max:255',
            'status'  => 'required|boolean',
        ]);

        // dd($request->all());

        $data = $request->all();

        $data['image'] = $this->uploadImage($request, 'image', 'concern_image-', 'concern_images', 275, 100);

        Concern::create($data);

        $notifications = array(
            'messege' => 'Concern created successfully!!',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.concerns.index')->with($notifications);
    }

    /**
     * Display the specified resource.
     */
    public function show(Concern $concern)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Concern $concern)
    {
        return view('backend.home.concern.edit', compact('concern'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Concern $concern)
    {
        $request->validate([
            'image' => 'required_if:type,file|image|mimes:webp,jpeg,png,jpg,svg|max:2048',
            'title' => 'required|string|max:255',
            'status'  => 'required|boolean',
        ]);

        // dd($request->all());

        $data = $request->all();

        if($request->hasFile('image')){
            // dd(5);
            $data['image'] = $this->updateImage($request, $concern->image, 'image', 'concern_image-', 'concern_images', 275, 100);
        }
        else{
            $data['image'] = $concern->image;
        }

        $concern->update($data);

        $notifications = array(
            'messege' => 'Concern updated successfully!!',
            'alert-type' => 'info',
        );
        return redirect()->route('admin.concerns.index')->with($notifications);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Concern $concern)
    {
        $this->deleteImage($concern->image);
        $concern->delete();
        $notifications = array(
            'messege' => 'Concern deleted successfully!!',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notifications);
    }



}
