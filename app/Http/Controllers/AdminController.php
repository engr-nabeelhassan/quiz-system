<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\Admin;
use App\Models\Category;

class AdminController extends Controller
{
    //
    function login(Request $request){
        
        $validation = $request->validate([
            "name"=>"required",
            "password"=>"required"
        ]);

        $admin = Admin::where([
            ['name',"=",$request->name],
            ['password',"=",$request->password]
        ])->first();

        if(!$admin){
            $validation = $request->validate([
                "user"=>"required",
            ],[
                "user.required"=>"User does not exist"
            ]);
        }
        Session::put('admin',$admin);
        return redirect('dashboard');
    }

    function dashboard(){
        $admin = Session::get('admin');
        if($admin){
           return view('admin',["name"=>$admin->name]);
        }else{
            return redirect('admin-login');
        }
    }

    function categories(){
        $categories = Category::get();
        $admin = Session::get('admin');
        if($admin){
           return view('categories',["name"=>$admin->name,"categories"=>$categories]);
        }else{
            return redirect('admin-login');
        }
    }

    function logout(){
        Session::forget('admin');
        return redirect('admin-login');
    }

    function addCategory(Request $request){
        $validation = $request->validate([
            "category"=>"required | min:3 | unique:categories,name"
        ]);
        $admin = Session::get('admin');
        $category = new Category();
        $category->name=$request->category;
        $category->creator=$admin->name;
        if($category->save()){
            Session::flash('category',"Success : Category " .$request->category. " Added.");
        }
        return redirect('admin-categories'); 
    }

    function deleteCategory($id){
        $isDeleted = Category::find($id)->delete();
        if($isDeleted){
        Session::flash('category',"Success : Category is deleted.");
        return redirect('admin-categories'); 
        }
    }
}
