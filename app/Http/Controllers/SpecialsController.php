<?php

namespace App\Http\Controllers;

use App\Models\Special;
use Illuminate\Http\Request;

class SpecialsController extends Controller
{
    public function index()
    {
        $specials = Special::all();
        return view('specials', compact('specials'));
    }
}
