<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Problem;
use App\Models\User;

Class ChallengeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('level');
    // }

    public function index()
    {
        // $admin = User::where('user_level', '1024') ->first();
        // if($admin){
        // return view('index');
        // } else {
        //     return view('Challenge');
        // }
        return view('Auth');
    }

    public function upload(Request $request) {
        $problems = Problem::create([
            'p_name' => $request->input('p_name', 'p_name'),
            'track' => $request->input('track', 'track'),
            'file' => $request->file('file')->store('images', 'public'),
            'p_url' => $request->input('p_url', 'p_url'),
            'point' => $request->input('point', 'point'),
            'flag' => $request->input('flag', 'flag')
        ]);

        return redirect() -> route('main');
    }

    public function PwnQuestion()
    {           
        $problem = Problem::select('*')->where('track', '=', 'pwn')->get();

        return view('track.pwn', ['problem' => $problem]);
    }

    public function RevQuestion()
    {
        $problem = Problem::select('*')->where('track', '=', 'rev')->get();

        return view('track.rev', ['problem' => $problem]);
    }

    public function MiscQuestion()
    {
        $problem = Problem::select('*')->where('track', '=', 'misc')->get();

        return view('track.misc', ['problem' => $problem]);
    }

    public function WebQuestion()
    {
        $problem = Problem::select('*')->where('track', '=', 'web')->get();

        return view('track.web', ['problem' => $problem]);
    }

}