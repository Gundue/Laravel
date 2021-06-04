<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

Class User extends Authenticatable
{

    protected $table = 'users';
    protected $primaryKey = 'idx';

    protected $fillable = ['user_id', 'user_pw', 'email'];
    protected $guarded = [];

}