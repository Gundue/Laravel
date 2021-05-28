<?php

namespace App\Http\Controllers;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\User;


Class MainController extends Controller
{
    public function register(Request $request) {

        $user = $request->validate([
            ['user_id' => 1, 'email' => 'taylor@example.com']
        ]);
        
        User::create($user);
        
        return view('index');
    }
}