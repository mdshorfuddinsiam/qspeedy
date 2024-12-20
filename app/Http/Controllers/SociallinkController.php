<?php

namespace App\Http\Controllers;

use App\Models\Sociallink;
use Illuminate\Http\Request;

class SociallinkController extends Controller
{
    
	public function edit()
	{
	    $sociallink = Sociallink::latest()->first();
	    return view('backend.website-setting.social-link', compact('sociallink'));
	}

	public function update(Request $request, $id)
	{
		$sociallink = Sociallink::find($id);
	    $request->validate([
	        'link_one' => 'nullable|url:http,https',
	        'link_two' => 'nullable|url:http,https',
	        'link_three' => 'nullable|url:http,https',
	        'link_four' => 'nullable|url:http,https',
	        'link_five' => 'nullable|url:http,https',
	        'link_six' => 'nullable|url:http,https',
	    ]);

	    // dd($request->all());

	    $data = [];
	    $data = $request->all();

	    $sociallink->update($data);

	    $notifications = array(
	        'messege' => 'Social Link updated successfully!!',
	        'alert-type' => 'info',
	    );
	    return redirect()->back()->with($notifications);
	}

}
