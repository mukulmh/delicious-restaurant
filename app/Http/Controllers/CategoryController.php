<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function addCategoryView()
    {
        return view('admin/add-category');
    }

    public function addCategory(Request $request)
    {
        Category::create($request->all());
        return view('admin/add-category');
    }

    public function deleteCategory($id){
        $data = Category::find($id);
        dd($data);
        // $data->delete();
        // return redirect()->back();
    }
}
