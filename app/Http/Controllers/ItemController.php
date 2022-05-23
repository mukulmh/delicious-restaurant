<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class ItemController extends Controller
{
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

    public function deleteItem($id){
        $data = Menu::find($id);
        dd($data);
        // $data->delete();
        // return redirect()->back();
    }
}
