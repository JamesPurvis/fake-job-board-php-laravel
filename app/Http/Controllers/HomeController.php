<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class HomeController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return view('index')->with('jobs', $jobs);
    }
}
