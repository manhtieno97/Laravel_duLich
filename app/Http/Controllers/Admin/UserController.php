<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class UserController extends Controller
{
    public function getUser()
    {
        $data['user']=user::all();
        return view('backend.users.index',$data);
    }
}
