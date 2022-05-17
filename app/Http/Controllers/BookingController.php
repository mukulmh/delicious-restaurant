<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function booking(Request $request){
		//dd($request->all());
		Booking::create($request->all());
		return (['data'=>'Your booking is successfull!']);
	}
}
