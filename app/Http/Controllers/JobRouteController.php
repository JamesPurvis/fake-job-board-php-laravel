<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class JobRouteController extends Controller
{
    public function showJob($job_id)
    {
        $job = Job::where('job_id', $job_id)->first();

        if (!$job) {
            abort(404, "Job not found!");
        } else {
            return view('job-show', compact('job'));
        }
    }
}
