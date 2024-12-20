<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class AdminProfileController extends Controller
{
    
	public function index()
	{
	    return view('auth.profile.profile_view', ['user' => auth()->user()]);
	}

	public function edit($id)
    {
        $user = User::find($id);
        return view('auth.profile.profile_edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'. $id,
            'phone' => 'required|min:11|numeric',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image'      => 'required_if:type,file|image|mimes:jpeg,png,jpg,svg|max:2048'
        ]);

        // dd($request->all());

        $user = User::find($id);

        // dd($user);

        if($request->hasFile('image')){
            if(file_exists($user->image)){
                unlink($user->image);
            }

            $image = $request->file('image');
            $imageName = 'admin_profile-'.rand(10000, 999999).time().'.'.$image->extension();
            $image->move('uploads/admin_profile/', $imageName);
            $imageUrl = 'uploads/admin_profile/'.$imageName;
            // dd($imageUrl);
        }else{
            $imageUrl = $user->image;
        }

        $data = [];
        $data = $request->all();
        $data['image'] = $imageUrl;

        // dd($data);
        // dd($user);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->image = $imageUrl;
        $user->save();
        
        $notifications = array(
            'messege' => 'Admin profile updated successfully!!',
            'alert-type' => 'info',
        );
        return redirect()->back()->with($notifications);
    }

    public function adminEmailUpdate(Request $request, $id){
        $request->validate([
            'email_address' => 'required|string|email|max:255|unique:users,email,'. $id,
            'password' => ['required', 'string', 'min:8'],
        ]);

        // dd($request->all());

        $user = User::find($id);

         if(Hash::check($request->password, $user->password)){
            $user->email = $request->email_address;
            $user->update();
            auth()->logout();

            $notifications = array(
                'messege' => 'Admin email changed successfully!!',
                'alert-type' => 'success',
            );
            return redirect()->route('login')->with($notifications);
        }else{
            $notifications = array(
                'messege' => 'Password does not match!!',
                'alert-type' => 'error',
            );
            return redirect()->back()->with($notifications);
        }
    }

    public function adminPasswordUpdate(Request $request, $id){

        $request->validate([
            'current_password' => ['required', 'string', 'min:8'],
            'new_password' => ['required', 'string', 'min:8', 'same:confirm_password'],
        ]);

        // dd($request->all());

        $user = User::find($id);

        if(Hash::check($request->current_password, $user->password)){
            $user->password = Hash::make($request->new_password);
            $user->update();
            auth()->logout();

            $notifications = array(
                'messege' => 'Admin password changed successfully!!',
                'alert-type' => 'success',
            );
            return redirect()->route('login')->with($notifications);
        }else{
            $notifications = array(
                'messege' => 'Current password does not match!!',
                'alert-type' => 'warning',
            );
            return redirect()->back()->with($notifications);
        }
       
    }



}
