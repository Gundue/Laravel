<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


Class RegisterController extends Controller
{
    public function index() 
    {
        return view('auth.register');
    }

    //기본필드가 email이라서 id 필드를 사용하게 변경
    public function username() 
    {
        return 'user_id';
    }

    public function register(Request $request) 
    {
        $user = User::create([
            'user_id' => $request->input('id', 'id'),
            'user_pw' => $request->input('password', 'password'),
            'email' => $request->input('email', null),
            'google_id' => null
        ]);

        Auth::attempt([
            'user_id' => $request->input('id'),
            'password' => $request->input('password')
        ]);
    }
}
