<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

// class Teacher extends Model
class Teacher extends Model
{
    protected $hidden = [
        'password' 
    ];


}
