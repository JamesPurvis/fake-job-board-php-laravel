<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('signin');
    }

    public function verify()
    {
        return view('verify');
    }

    public function submit(Request $request) 
    {
       $login_id = $request->input('loginid');

       if (User::where('email_address', $login_id)->exists() || User::where('phone_number', $login_id)->exists()) {
        Session::put('login_id', $login_id);
        return redirect()->route('verify');
       } else {
        return redirect()->back()->withErrors(['loginid' => 'A user could not be found with the specified credentials.']);
    }
}

    
}
