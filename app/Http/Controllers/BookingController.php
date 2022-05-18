<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function booking(Request $request){
		//dd($request->all());
		Booking::create($request->all());
		$message = 'Booking successfull. Thank you!';
		return view('booking', compact('message'));
	}

	public function index(){
		return view('booking');
	}
}
