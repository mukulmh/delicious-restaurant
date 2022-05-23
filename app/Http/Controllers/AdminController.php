<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class AdminController extends Controller
{
    public function index()
    {
        $items = Menu::all();
        $categories = Category::all();
        return view('admin/index', compact('items', 'categories'));
    }

    public function addCategoryView()
    {
        return view('admin/add-category');
    }

    public function addCategory(Request $request)
    {
        
        Category::create($request->all());
        return view('admin/add-category');
    }

    public function addItemView(){
        $categories = Category::all();
        return view('admin/add-item', compact('categories'));
    }

    public function addItem(Request $request)
    {
        Menu::create($request->all());
        $categories = Category::all();
        return view('admin/add-item', compact('categories'));
    }
}
