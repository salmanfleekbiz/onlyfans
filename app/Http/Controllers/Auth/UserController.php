<?php

namespace App\Http\Controllers\Auth;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('guest');
    }


    public function showLoginForm()
    {
        return view("front.login.login");
    }
    
    public function login(Request $request)
    {
         //----------validate form data---------------
        $this->validate($request, [
           'useremail'=>'required|email',
            'userpassword'=>'required'
        ]);


        //--------------Atempt to login--------------
        if(Auth::attempt(['email'=>$request->useremail,'password'=>$request->userpassword]))
        {            
            return redirect('/');
        } else {
             // if unsucceful then redirect to login form
             return redirect('/login')->withErrors("Invlaid email address or password");
        } 
           
          
       
    }
}
