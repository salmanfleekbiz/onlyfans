<?php

namespace App\Http\Controllers\Front\Notification;
use Auth;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class NotificationController extends Controller
{

    public function index()
    {
        if($user = Auth::user())
        {
            $notification = 'notification';
            return view('front.notification.'.$notification);
        }else{

            return redirect('/login');
        }
    }

    public function likes_list()
    {
        if($user = Auth::user())
        {
            $likes = 'likes';
            return view('front.notification.'.$likes);
        }else{

            return redirect('/login');
        }
    }

    public function interaction_list()
    {
        if($user = Auth::user())
        {
            $interaction = 'interaction';
            return view('front.notification.'.$interaction);
        }else{

            return redirect('/login');
        }
    }

    public function subscriber_list()
    {
        if($user = Auth::user())
        {
            $subscriber = 'subscriber';
            return view('front.notification.'.$subscriber);
        }else{

            return redirect('/login');
        }
    }

    public function tipped_list()
    {
        if($user = Auth::user())
        {
            $tipped = 'tipped';
            return view('front.notification.'.$tipped);
        }else{

            return redirect('/login');
        }
    }

    public function pricechange_list()
    {
        if($user = Auth::user())
        {
            $pricechange = 'pricechange';
            return view('front.notification.'.$pricechange);
        }else{

            return redirect('/login');
        }
    }

    public function alerts_list()
    {
        if($user = Auth::user())
        {
            $alerts = 'alerts';
            return view('front.notification.'.$alerts);
        }else{

            return redirect('/login');
        }
    }

    
}
