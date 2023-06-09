<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Redirector;

class DashboardController extends Controller
{
    public function index()
    {
        $login_id = Session::get('login_id');

        if (strstr($login_id, "@")) {
            $user = User::where('email_address', $login_id)->first();
        } else {
            $user = User::where('phone_number', $login_id)->first();
        }


        Session::put('first_name', $user->first_name);
        Session::put('last_name', $user->last_name);
        
        return view('dashboard');
    }

    public function logout(Redirector $redirector) {
        Auth::logout();
        return $redirector->to('/');
    }

}
