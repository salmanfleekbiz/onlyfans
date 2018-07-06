<?php

namespace App\Http\Controllers\Front\Register;
use Auth;
use App\User;
use App\Userinfo;
use App\Resellercode;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
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
            $register = 'register';
            return view('front.register.'.$register);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if (User::where('email', '=', $request->input("useremail"))->count() > 0) {
            echo 'emailexist';
        }else if($request->input("authorization_code") != ''){
            if (Resellercode::where('reseller_code', '=', $request->input("authorization_code"))->where('status', '0')->count() > 0) {

                $reseller = \App\Resellercode::where('reseller_code',$request->input("authorization_code"))->first();
                $reseller->status=1;
                $reseller->updated_at=date("Y-m-d H:i:s");
                $reseller->save();  

                $user = new User();   
                $user->f_name=$request->input("f_name");
                $user->l_name=$request->input("l_name");
                $user->email=$request->input("useremail");
                $user->password=bcrypt($request->input("userpassword"));
                $user->phone=$request->input("phone");
                $user->user_role=2;
                $user->remember_token=$request->input("_token");
                $user->is_active=1;
                $user->created_at=date("Y-m-d H:i:s");
                $user->updated_at=date("Y-m-d H:i:s");
                $user->save();
                $userId = $user->id;

                $userInfo = new Userinfo();   
                $userInfo->user_id=$userId;
                $userInfo->company_name=$request->input("company_name");
                $userInfo->address1=$request->input("adress");
                $userInfo->address2=$request->input("adress2");
                $userInfo->city=$request->input("city");
                $userInfo->state=$request->input("state");
                $userInfo->zip=$request->input("postalcode");
                $userInfo->country=$request->input("country");
                $userInfo->phone=$request->input("phone");
                $userInfo->phone_guranted=$request->input("phone_guranted");
                $userInfo->reseller_code=$request->input("authorization_code");
                $userInfo->tax=$request->input("tax");
                $userInfo->sale_notification=$request->input("sales");
                $userInfo->shipping_company=$request->input("shipping_company_name");
                $userInfo->shipping_f_name=$request->input("shipping_f_name");
                $userInfo->shipping_l_name=$request->input("shipping_l_name");
                $userInfo->shipping_address1=$request->input("shipping_address1");
                $userInfo->shipping_address2=$request->input("shipping_address2");
                $userInfo->shipping_city=$request->input("shipping_city");
                $userInfo->shipping_state=$request->input("shipping_state");
                $userInfo->shipping_zip=$request->input("shipping_postalcode");
                $userInfo->shipping_country=$request->input("shipping_country");
                $userInfo->created_at=date("Y-m-d H:i:s");
                $userInfo->updated_at=date("Y-m-d H:i:s");
                $userInfo->save();
                $userInfoId = $userInfo->id;
                echo 'useraddsucess';
            }else{
                echo 'codenotmatch';
            }   
        }else{
                $user = new User();   
                $user->f_name=$request->input("f_name");
                $user->l_name=$request->input("l_name");
                $user->email=$request->input("useremail");
                $user->password=bcrypt($request->input("userpassword"));
                $user->phone=$request->input("phone");
                $user->user_role=3;
                $user->remember_token=$request->input("_token");
                $user->is_active=1;
                $user->created_at=date("Y-m-d H:i:s");
                $user->updated_at=date("Y-m-d H:i:s");
                $user->save();
                $userId = $user->id;

                $userInfo = new Userinfo();   
                $userInfo->user_id=$userId;
                $userInfo->company_name=$request->input("company_name");
                $userInfo->address1=$request->input("adress");
                $userInfo->address2=$request->input("adress2");
                $userInfo->city=$request->input("city");
                $userInfo->state=$request->input("state");
                $userInfo->zip=$request->input("postalcode");
                $userInfo->country=$request->input("country");
                $userInfo->phone=$request->input("phone");
                $userInfo->phone_guranted=$request->input("phone_guranted");
                $userInfo->reseller_code=$request->input("authorization_code");
                $userInfo->tax=$request->input("tax");
                $userInfo->sale_notification=$request->input("sales");
                $userInfo->shipping_company=$request->input("shipping_company_name");
                $userInfo->shipping_f_name=$request->input("shipping_f_name");
                $userInfo->shipping_l_name=$request->input("shipping_l_name");
                $userInfo->shipping_address1=$request->input("shipping_address1");
                $userInfo->shipping_address2=$request->input("shipping_address2");
                $userInfo->shipping_city=$request->input("shipping_city");
                $userInfo->shipping_state=$request->input("shipping_state");
                $userInfo->shipping_zip=$request->input("shipping_postalcode");
                $userInfo->shipping_country=$request->input("shipping_country");
                $userInfo->created_at=date("Y-m-d H:i:s");
                $userInfo->updated_at=date("Y-m-d H:i:s");
                $userInfo->save();
                $userInfoId = $userInfo->id;
                echo 'useraddsucess';
        }
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
