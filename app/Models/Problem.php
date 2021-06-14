<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

Class Problem extends Authenticatable
{

    protected $table = 'problem';
    protected $primaryKey = 'idx';

    protected $fillable = ['p_name', 'track', 'point', 'flag', 'p_url', 'file'];
}