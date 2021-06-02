<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\User;

Class LoginController extends Controller
{
    public function login() {

        return view('Ranking');
    }
}