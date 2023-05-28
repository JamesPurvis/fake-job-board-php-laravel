<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Session;

class LocationController extends Controller
{
   public function update(Request $request) {

    $latitude = $request->input('latitude');
    $longitude = $request->input('longitude');

    Session::put('user_lat', $latitude);
    Session::put('user_long', $longitude);

    return response()->json(['message' => 'Location updated successfully: ' . $latitude . $longitude]);
   }
}