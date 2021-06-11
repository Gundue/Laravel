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
        return view('index');
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