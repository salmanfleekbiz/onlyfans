<?php

namespace App\Http\Controllers\Front\Losspassword;
use Auth;
use Mail;
use App\User;
use App\Userinfo;
use App\Resellercode;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class LosspasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if($user = Auth::user())
        {
            return redirect('/');
        }else{
            $losspassword = 'losspassword';
            return view('front.losspassword.'.$losspassword);
        }
    }

    public function sendpassword(Request $request)
    {
        if (User::where('email', '=', $request->input("email"))->count() > 0) {

          $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
          $password = substr( str_shuffle( $chars ), 0, 8 );  
          $updatepassword = \App\User::where('email',$request->input("email"))->first();
          $updatepassword->password=bcrypt($password);
          $updatepassword->updated_at=date("Y-m-d H:i:s");
          $updatepassword->save();

          // $message =  "You have new login credentials below please login to SugarHouse.<br><br> User: ".$request->input("email")." <br><br> Pass: ".$password."<br><br>Thanks & Regards<br><br>SugarHouse Team";
          // $headers = "MIME-Version: 1.0" . "\r\n";
          // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
          // $headers .= 'From: SugarHouse<info@sugarHouse.com>' . "\r\n";
          // $to = $request->input("email");
          // $subject = "SugarHouse Losspassword";
          // $mail = mail($to,$subject,$message,$headers);

          return Redirect::back()->withMessage('Password send to the email Please check your password.');
        }else{
          return redirect('/losspassword')->withErrors("Email address does not exists.");
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
