<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        return $request->all();
    //    $rules = 
    //             [
    //                     'email'=>'require|email',
    //                     'password'=> 'require|min:8'
    //             ];
    //     $validator = Validator::make($request->all(), $rules);
    //     if($validator->fails())
    //     {
    //         dd('xxx');
    //     } else
    //     {

    //     }
    }

    public function checkmail(Request $request)
    {
        $email = $request->email;
        $check = true;

        if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $check = false;            
        } 
        return view('email', compact('check'));
        
    }


}
