<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    //
    function login(Request $req){

        $admin = Admin::where([
            ['name',"=",$req->name],
            ['password',"=",$req->password]
        ])->first();
        return view('admin',["name"=>$admin->name]);
    }
}
