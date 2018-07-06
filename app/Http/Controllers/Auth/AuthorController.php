<?php

namespace App\Http\Controllers\Auth;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthorController extends Controller
{
    public function __construct() {
        $this->middleware('guest');
    }


    public function showLoginForm()
    {
        return view("admin.login.login");
    }
    
    public function login(Request $request)
    {
        //----------validate form data---------------
        $this->validate($request, [
           'email'=>'required|email',
            'password'=>'required'
        ]);

        //--------------Atempt to login--------------
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {            
            return redirect('admin');
        } else {
             // if unsucceful then redirect to login form
             return redirect('admin/login')->withErrors("Invlaid email address or password");
        } 
           
          
       
    }
}
