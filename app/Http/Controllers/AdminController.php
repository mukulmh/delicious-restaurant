<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $items = DB::table('menus')->join('categories','menus.category_id', '=', 'categories.id')->select('menus.id','menus.item_name','menus.price','menus.description','categories.category_name')->get();
        //$items = Menu::all();
        $categories = Category::all();
        return view('admin/index', compact('items', 'categories'));
    }

    public function loginview()
    {
        return view('admin/login');
    }

    public function login(Request $request)
    {
        $user = User::all()->where('username', $request->input('username'))->first();
        if($user == null){
            return redirect()->back()->with(['messege'=> 'No user found!']);
        }
        if(md5($request->input('password'))!=$user->password){
            return redirect()->back()->with(['messege'=>'Incorrect password!']);
        }

        $request->session()->put('id',$user->id);

        return redirect()->route('admin.view');
    }

    public function logout(){
        session()->flush('id');
        return redirect()->route('admin.login');
    }
}
