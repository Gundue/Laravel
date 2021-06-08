<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


Class LoginController extends Controller
{
    public function index() 
    {
        return view('auth.login');
    }

    public function login(Request $request) 
    {
        $validation = $request -> validate([
            'user_id' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($validation)) {
            return redirect()->back(); 
        } else {
            return view('index');
        }
    }
    public function logout() {
        Auth::logout();

        return redirect()->route('main');
    }
}