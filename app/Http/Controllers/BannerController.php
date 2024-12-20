<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Traits\NormalImageUpload;

class BannerController extends Controller
{

    use NormalImageUpload;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::latest()->get();
        return view('backend.home.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.home.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'video' => 'required|mimes:mp4,mov,ogg,qt|max:40960',
            // 'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
            // // 'description' => 'required|string',
            // 'default_media'  => 'required|boolean',
            'status'  => 'required|boolean',
        ]);

        // dd($request->all());

        $data = [];
        $data = $request->all();

        // if ($request->hasFile('video')) {
        //     $file = $request->file('video');
        //     $filename = 'banner_video-'.time().'_'.$file->getClientOriginalName();
        //     $file->move("uploads/banner_videos/", $filename);
        //     $data['video'] = "uploads/banner_videos/".$filename;
        // }

        if($request->file('video')){
            $data['video'] = $this->uploadImage($request, 'video', 'banner_video-', 'banner_videos');
        }

        if($request->hasFile('image')){
            $data['image'] = $this->uploadImage($request, 'image', 'banner_image-', 'banner_images');
        }


        Banner::create($data);

        $notifications = array(
            'messege' => 'Banner created successfully!!',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.banners.index')->with($notifications);
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Banner $banner)
    public function edit()
    {
        $banner = Banner::latest()->first();
        return view('backend.home.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'video' => 'nullable|mimes:mp4,mov,ogg,qt|max:40960',
            // 'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
            // // 'image' => 'required_if:type,file|image|mimes:webp,jpeg,png,jpg,svg|max:2048',
            // // 'description' => 'required',
            // 'default_media'  => 'required|boolean',
            'status'  => 'required|boolean',
        ]);

        // dd($request->all());

        $data = [];
        $data = $request->all();

        // if($request->hasFile('video')){
        //     if ($banner->video && file_exists(public_path($banner->video))) {
        //         unlink(public_path($banner->video));
        //     }
        //     $file = $request->file('video');
        //     $filename = 'banner_video-'.time().'_'.$file->getClientOriginalName();
        //     $file->move("uploads/banner_videos/", $filename);
        //     $data['video'] = "uploads/banner_videos/".$filename;
        // }else{
        //     $data['video'] = $banner->video;
        // }

        if($request->hasFile('video')){
            $data['video'] = $this->updateImage($request, $banner->video, 'video', 'banner_video-', 'banner_videos');
        }
        else{
            $data['video'] = $banner->video;
        }

        if($request->hasFile('image')){
            $data['image'] = $this->updateImage($request, $banner->image, 'image', 'banner_image-', 'banner_images');
        }
        else{
            $data['image'] = $banner->image;
        }


        $banner->update($data);

        $notifications = array(
            'messege' => 'Banner updated successfully!!',
            'alert-type' => 'info',
        );
        return redirect()->route('admin.banners.index')->with($notifications);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        if ($banner->video && file_exists(public_path($banner->video))) {
            unlink(public_path($banner->video));
        }
        $this->deleteImage($banner->image);
        $banner->delete();
        $notifications = array(
            'messege' => 'Banner deleted successfully!!',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notifications);
    }
}
