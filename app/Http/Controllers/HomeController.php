<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class HomeController extends Controller
{
    public function index()
    {
        $jobs = Job::paginate(1);
        return view('index')->with('jobs', $jobs);
    }

    public function search(Request $request)
    {
        $query = Job::query();

        if ($request->filled('country')) {
            $query->where('job_country', '=', $request->input('country'));
        }

        if ($request->filled('state')) {
            $query->where('job_state', '=', $request->input('state'));
        }

        if ($request->filled('city')) {
            $query->where('job_city', '=', $request->input('city'));
        }

        if ($request->filled('cs') && $request->filled('warehouse')) {
            $query->whereIn('job_type', ['Customer Service', 'Fulfillment']);
        } elseif ($request->filled('cs')) {
            $query->where('job_type', '=', 'Customer Service');
        } elseif ($request->filled('warehouse')) {
            $query->where('job_type', '=', 'Fulfillment');
        }

        $job_results = $query->get();


        return view('search')->with('job_results', $job_results);
    }


}
