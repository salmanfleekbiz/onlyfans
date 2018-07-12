<?php

namespace App\Http\Controllers\Front\Fans;
use Auth;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class FansController extends Controller
{

    public function index()
    {
        if($user = Auth::user())
        {
            $fans = 'fans';
            return view('front.fans.'.$fans);
        }else{

            return redirect('/login');
        }
    }

    public function active_list()
    {
        if($user = Auth::user())
        {
            $active = 'active';
            return view('front.fans.'.$active);
        }else{

            return redirect('/login');
        }
    }

    public function expired_list()
    {
        if($user = Auth::user())
        {
            $expire = 'expire';
            return view('front.fans.'.$expire);
        }else{

            return redirect('/login');
        }
    }
}
