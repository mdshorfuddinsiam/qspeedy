<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Serviceimage;
use Illuminate\Http\Request;
use App\Http\Traits\ImageUpload;

class ServiceController extends Controller
{

    use ImageUpload;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::latest()->get();
        return view('backend.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:webp,jpeg,png,jpg,svg|max:2048',
            // 'multi_images.*' => 'required|image|mimes:webp,jpeg,png,jpg,svg|max:2048',
            'multi_images' => 'required|array|min:1', // Make multi_images array required and ensure at least one file is uploaded
            'multi_images.*' => 'image|mimes:webp,jpeg,png,jpg,svg|max:2048', // Validate individual files
            'name' => 'required|string|max:255',
            'description_top' => 'required|string',
            'description_bottom' => 'required|string',
            'status'  => 'required|boolean',
        ]);

        // dd($request->all());

        // $data = [];
        $data = $request->except('multi_images');
        $data['slug'] = \Str::slug($request->name);

        $data['image'] = $this->uploadImage($request, 'image', 'service_image-', 'service_images', 546, 550);

        $service = Service::create($data);

        if ($request->hasFile('multi_images')) {
            $imagePaths = $this->multiImageUpload($request, 'multi_images', 'service_multi_image-', 'service_images', 546, 350);
            foreach ($imagePaths as $row) {
                Serviceimage::create([
                    'service_id' => $service->id,
                    'multi_image' => $row
                ]);
            }
        }

        $notifications = array(
            'messege' => 'Service created successfully!!',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.services.index')->with($notifications);
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('backend.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'image' => 'required_if:type,file|image|mimes:webp,jpeg,png,jpg,svg|max:2048',
            'multi_images' => 'nullable|array|min:1', // Make multi_images array optional
            'multi_images.*' => 'image|mimes:webp,jpeg,png,jpg,svg|max:2048', // Validate individual files
            'name' => 'required|string|max:255',
            'description_top' => 'required|string',
            'description_bottom' => 'required|string',
            'status'  => 'required|boolean',
        ]);

        // dd($request->all());

        // $data = [];
        // $data = $request->all();

        $data = $request->except('multi_images');
        $data['slug'] = \Str::slug($request->name);

        if($request->hasFile('image')){
            $data['image'] = $this->updateImage($request, $service->image, 'image', 'service_image-', 'service_images', 546, 550);
        }
        else{
            $data['image'] = $service->image;
        }

        $service->update($data);

        if ($request->hasFile('multi_images')) {
            $imagePaths = $this->multiImageUpload($request, 'multi_images', 'service_multi_image-', 'service_images', 546, 350);
            foreach ($imagePaths as $row) {
                Serviceimage::create([
                    'service_id' => $service->id,
                    'multi_image' => $row
                ]);
            }
        }

        $notifications = array(
            'messege' => 'Service updated successfully!!',
            'alert-type' => 'info',
        );
        return redirect()->route('admin.services.index')->with($notifications);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        foreach ($service->serviceimages as $row) {
            $this->deleteImage($row->multi_image);
            $row->delete();
        }
        $this->deleteImage($service->image);
        $service->delete();
        $notifications = array(
            'messege' => 'Service deleted successfully!!',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notifications);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function serviceimageDelete(Service $service, Serviceimage $serviceimage)
    {
        $this->deleteImage($serviceimage->multi_image);
        $serviceimage->delete();
        $notifications = array(
            'messege' => 'Service image deleted successfully!!',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.services.edit', ['service' => $service->id])->with($notifications);
    }


}
