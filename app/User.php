<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['user_id', 'email_address', 'personal_pin', 'first_name', 'last_name', 'phone_number'];
}