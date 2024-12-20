<?php

namespace App\Http\Controllers;

use App\Http\Traits\NormalImageUpload;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    use NormalImageUpload;

    public function edit(){
    	$about = About::latest()->first();
    	// dd($about);
    	return view('backend.about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $request->validate([
        	'title' => 'required|string|max:255|unique:abouts,title,'. $about->id,
        	'subtitle_home' => 'required|string|max:255|unique:abouts,subtitle_home,'. $about->id,
            'subtitle_about' => 'required|string|max:255|unique:abouts,subtitle_about,'. $about->id,
            'image'      => 'required_if:type,file|image|mimes:webp,jpeg,png,jpg,svg|max:2048',
            // 'image' => $about ? 'nullable|image|mimes:webp,jpeg,png,jpg,svg|max:2048' : 'required|image|mimes:webp,jpeg,png,jpg,svg|max:2048',
            'description' => 'required|string',
        ]);

        // dd($request->all());

        $data = [];
        $data = $request->all();

        if($request->hasFile('image')){
            $data['image'] = $this->updateImage($request, $about->image, 'image', 'about_image-', 'about_images');
        }
        else{
            $data['image'] = $about->image;
        }


        $about->update($data);

        $notifications = array(
            'messege' => 'About updated successfully!!',
            'alert-type' => 'info',
        );
        return redirect()->back()->with($notifications);
    }

}
