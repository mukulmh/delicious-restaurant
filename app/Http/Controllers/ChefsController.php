<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChefsController extends Controller
{
    public function index(){
        return view('chefs');
    }
}
