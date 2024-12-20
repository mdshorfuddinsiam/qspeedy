<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;
use App\Http\Traits\ImageUpload;

class AreaController extends Controller
{

    use ImageUpload;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $areas = Area::latest()->get();
        return view('backend.area.index', compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.area.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:webp,jpeg,png,jpg,svg|max:2048',
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'address' => 'required|string',
            'map_link' => 'required|url',
            'status'  => 'required|boolean',
        ]);

        // dd($request->all());

        // $data = [];
        $data = $request->all();
        $data['slug'] = \Str::slug($request->name);

        $data['image'] = $this->uploadImage($request, 'image', 'area_image-', 'area_images', 546, 364);

        $area = Area::create($data);

        $notifications = array(
            'messege' => 'Area created successfully!!',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.areas.index')->with($notifications);
    }

    /**
     * Display the specified resource.
     */
    public function show(Area $area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Area $area)
    {
        return view('backend.area.edit', compact('area'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Area $area)
    {
        $request->validate([
            'image' => 'required_if:type,file|image|mimes:webp,jpeg,png,jpg,svg|max:2048',
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'address' => 'required|string',
            'map_link' => 'required|url',
            'status'  => 'required|boolean',
        ]);

        // dd($request->all());

        // $data = [];
        // $data = $request->all();

        $data = $request->except('multi_images');
        $data['slug'] = \Str::slug($request->name);

        if($request->hasFile('image')){
            $data['image'] = $this->updateImage($request, $area->image, 'image', 'area_image-', 'area_images', 546, 550);
        }
        else{
            $data['image'] = $area->image;
        }

        $area->update($data);

        $notifications = array(
            'messege' => 'Area updated successfully!!',
            'alert-type' => 'info',
        );
        return redirect()->route('admin.areas.index')->with($notifications);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Area $area)
    {
        $this->deleteImage($area->image);
        $area->delete();
        $notifications = array(
            'messege' => 'Area deleted successfully!!',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notifications);
    }




}
