<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\User;


Class RegisterController extends Controller
{
    public function index() 
    {
        return view('auth.register');
    }
    public function register(Request $request) 
    {

        $user = User::create([
            'user_id' => $request->input('id', 'id'),
            'user_pw' => $request->input('password', 'password'),
            'email' => $request->input('email', null)
        ]);
        return redirect('/');
    }
}