<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlazeUser extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'email', 'phone', 'birthdate'
    ];
}
