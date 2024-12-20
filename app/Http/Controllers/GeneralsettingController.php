<?php

namespace App\Http\Controllers;

use App\Models\Generalsetting;
use Illuminate\Http\Request;
use App\Http\Traits\NormalImageUpload;

class GeneralsettingController extends Controller
{

	use NormalImageUpload;

    public function edit(){
    	$generalsetting = Generalsetting::latest()->first();
    	// dd($generalsetting);
    	return view('backend.website-setting.general-setting', compact('generalsetting'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'website_name' => 'required|string|max:255',
            'site_icon'      => 'required_if:type,file|image|mimes:jpeg,png,jpg,svg|max:2048',
            'site_logo'      => 'required_if:type,file|image|mimes:jpeg,png,jpg,svg|max:2048',
            'email' => 'required|string|email|max:255',
            'email_two' => 'nullable|string|email|max:255',
            // 'phone' => 'required|numeric|min:11',
            'phone' => 'required|string|min:11',
            'address' => 'required|string',
            'description' => 'required|string',
            'contact_description' => 'required',
            'google_map' => 'required|string',
            // 'copyright_text' => 'required',
        ]);

        $generalsetting = Generalsetting::find($id);
        // dd($generalsetting);
        // dd($request->all());

        $data = $request->all();

        if($request->hasFile('site_icon')){
        	// dd(5);
            $data['site_icon'] = $this->updateImage($request, $generalsetting->site_icon, 'site_icon', 'site_icon-', 'site_icons');
        }
        else{
            $data['site_icon'] = $generalsetting->site_icon;
        }

        if($request->hasFile('site_logo')){
        	// dd(10);
            $data['site_logo'] = $this->updateImage($request, $generalsetting->site_logo, 'site_logo', 'site_logo-', 'site_logos');
        }
        else{
            $data['site_logo'] = $generalsetting->site_logo;
        }

        $generalsetting->update($data);

        $notifications = array(
            'messege' => 'General setting updated successfully!!',
            'alert-type' => 'info',
        );
        return redirect()->back()->with($notifications);
    }



}
