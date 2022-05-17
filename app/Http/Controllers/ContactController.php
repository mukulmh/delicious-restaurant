<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact(Request $request){
		//dd($request->all());
		Contact::create($request->all());
		$message = 'Message sent. Thank you!';
		return view('contact', compact('message'));
	}
	public function index(){
		return view('contact');
	}
}
