<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\User;

Class ChallengeController extends Controller
{
    public function question()
    {
        $users = User::select('*')->get();

        return view('Challenge', ['users' => $users]);
    }
}