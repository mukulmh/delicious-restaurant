<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $items = Menu::all();
        $categories = Category::all();
        return view('admin/index', compact('items', 'categories'));
    }
}
