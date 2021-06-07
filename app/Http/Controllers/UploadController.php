<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Problem;

Class UploadController extends Controller 
{
    public function upload(Request $request) {
        $problems = Problem::create([
            'p_name' => $request->input('p_name', 'p_name'),
            'track' => $request->input('track', 'track'),
            'p_url' => $request->input('p_url', 'p_url'),
            'point' => $request->input('point', 'point'),
            'flag' => $request->input('flag', 'flag')
        ]);

        return redirect() -> route('main');
    }
}