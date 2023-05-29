<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';
    protected $fillable = ['job_id', 'job_title', 'job_location', 'job_description', 'job_city', 'job_state', 'job_type', 'job_country', 'job_duration', 'job_rate', 'job_e_type'];
}