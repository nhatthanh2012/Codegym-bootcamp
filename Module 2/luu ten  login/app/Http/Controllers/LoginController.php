<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }

    public function postLogin(request $request)
    {
        if($request->username == 'admin' && $request->password == '123456')
        {
            Session::push('login', true);
            return redirect()->back()->with('message', 'Đăng nhập thành công');
        }
        else 
        {
            Session::flash('message', 'Đăng nhập thất bại');
            return redirect()->back();
        }
    }
}
