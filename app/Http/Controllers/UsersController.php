<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Registered;

class UsersController extends Controller
{
    public function __construct() {
        $loai_arr = \DB::table('category')->where('anHien','=',1 )->orderBy('thuTu')->get();
        \View::share( 'loai_arr', $loai_arr );
    }

    function login() {
        return view('client.login');
    }

    function login_(Request $request) {
        if(auth()->guard('web')
            ->attempt(['email'=>$request['email'],'password'=>$request['password']])){
            $user = auth()->guard('web')->user();
            return redirect()->intended('/')->with('success','Đăng nhập thành công');
        }
        else return back()->with('warning','Email, Password không đúng');
    }

    function register() {
        return view('client.register');
    }

    function register_(Request $request) {
        $u = new user;
        $u->email = strtolower(trim(strip_tags($request['email'])));
        $u->name = trim(strip_tags($request['name']));
        $u->password = trim(strip_tags( \Hash::make($request['password'])));
        $u->address = trim(strip_tags($request['address']));
        $u->phone = trim(strip_tags($request['phone'])); 
        $u->save();
        $id_user  = $u->id;
        if(auth()->guard('web')->attempt(['email'=>$request['email'],'password'=>$request['password']])){
            // gửi mail
            $user = auth()->guard('web')->user();
            event(new Registered($user));

            return redirect('/')->with('success',"Đăng ký hoàn tất!");
        }
        else return back()->with('warning','Đăng ký không thành công');
    }

    function exit(){
        auth()->guard('web')->logout();
        return redirect('/login')->with('info','Bạn đã đăng xuất thành công');
    }

    function profile(Request $request) {
        return view('client.profile', [
            'user' => $request->user(),
        ]);
    }
}
