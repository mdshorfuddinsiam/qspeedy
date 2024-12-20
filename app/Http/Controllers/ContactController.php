<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

	// (Backend) Contact Lists
	public function index(){
		$contacts = Contact::latest()->get();
		return view('backend.contact.index', compact('contacts'));
	}

	// (Frontend) Contact Store
	public function store(Request $request){
		$request->validate([
		    'name' => 'required|string|max:255',
		    'email' => 'required|string|email|max:255',
		    'phone' => 'required|string|min:11|max:15',
		    'message' => 'required',
		]);

		// dd($request->all());

		$data = [];
		$data = $request->all();

		Contact::create($data);

		$notifications = array(
		    'messege' => 'Message send successfully!!',
		    'alert-type' => 'success',
		);
		return redirect()->back()->with($notifications);
	}

	// (Backend) Contact Active
	public function destroy(Contact $contact){
		$contact->delete();
		$notifications = array(
		    'messege' => 'Contact status deleted successfully!!',
		    'alert-type' => 'success',
		);
		return redirect()->back()->with($notifications);
	}


}
