<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Session;

class AuthenticateController extends Controller
{
    public function auth(Request $request)
    {
        $pin = $request->input('pin');
        $login_id = Session::get('login_id');

        $user = User::where('email_address', $login_id)
        ->where('personal_pin', $pin)
        ->first();

        $user2 = User::where('phone_number', $login_id)
        ->where('personal_pin', $pin)->first();


        if ($user == null && $user2 == null) {
            return redirect()->back()->withErrors(['personal_pin' => 'Invalid pin entered. Please try again.']);
        } else {
            return redirect()->route('dashboard');
        }
    }
}
