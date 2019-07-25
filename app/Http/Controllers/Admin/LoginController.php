<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\http\Requests\checkLogIn;
use Auth;
class LoginController extends Controller
{
    public function getLogin()
    {
    	return view('backend.login');
    }
    public function postLogin(checkLogIn $request)
    {
        $arr=['email'=>$request->email,'password'=>$request->password];
        if($request->remember='remember') $remember=true;
        else $remember=false;
        if(Auth::attempt($arr,$remember))
        {
            return redirect('admin/home');
        }
    	else{
            return back()->with('error','Tài khoản mật khẩu không đúng!');
        }
    }
}
