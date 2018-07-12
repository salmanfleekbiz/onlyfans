<?php

namespace App\Http\Controllers\Front\Following;
use Auth;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class FollowingController extends Controller
{

    public function index()
    {
        if($user = Auth::user())
        {
            $following = 'following';
            return view('front.following.'.$following);
        }else{

            return redirect('/login');
        }
    }

    public function active_list()
    {
        if($user = Auth::user())
        {
            $active = 'active';
            return view('front.following.'.$active);
        }else{

            return redirect('/login');
        }
    }

    public function expired_list()
    {
        if($user = Auth::user())
        {
            $expire = 'expire';
            return view('front.following.'.$expire);
        }else{

            return redirect('/login');
        }
    }
}
