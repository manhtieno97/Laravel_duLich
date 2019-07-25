<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class HomeController extends Controller
{
    public function getHome()
    {
    	return view('backend.home');
    }
    public function logOut()
    {
        Auth::logout();
    	return redirect('login');
    }
}
