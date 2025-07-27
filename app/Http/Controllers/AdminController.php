<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    function index() {
        return view('admin.home');
    }

    function login() {
        return view("admin.login");
    }
    function login_(Request $request){
        if(auth()->guard('admin')
        ->attempt(['email'=>$request['email'],'password'=>$request['password']])){
            $user = auth()->guard('admin')->user();
            if($user->role == 0) return redirect('admin/dashboard')->with('success','Chào bạn đến với trang quản trị');
            else return back()->with('alert','Bạn không đủ quyền');
        }
        else return back()->with('warning','Email, Password không đúng');
    } 
    function exit(){
        //auth()->guard('admin')->logout(); hoặc
        Auth::guard('admin')->logout(); //nhớ use Auth; ở đầu controller
        return redirect('admin/login')->with('info','Bạn đã đăng xuất khỏi trang quản trị');
    }
}
