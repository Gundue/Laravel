<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Problem;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function update(Request $request) {
        $input = $request-> input('flag');
        $check = Problem::select('*')->where('flag', '=', $input) -> count();

        if($check == 1) {
            $check = Problem::select('*')->where('flag', '=', $input) -> first();
            $point = $check->point;
            DB::table('users')->where('idx', 1)->update(['point' => 'point' + $point]);
            // update users set point = point + 50 where idx = 1
            return view('Challenge');
        } else {
            return view('index');
        }            
    }
}
