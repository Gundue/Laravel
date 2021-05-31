<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

Class User extends Model
{

    protected $table = 'users';
    protected $primaryKey = 'idx';

    protected $fillable = ['user_id', 'user_pw', 'email'];
    protected $guarded = [];

}

?>