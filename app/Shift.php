<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    protected $table = 'job_shifts';
    protected $fillable = ['shift_id', 'job_id', 'job_schedule', ['job_quanity']];
}