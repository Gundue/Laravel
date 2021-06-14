<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Problem;
use App\Models\User;

class UploadController extends Controller
{
    public function upload(Request $request) {
        
        $problems = Problem::create([
            'p_name' => $request->input('p_name', 'p_name'),
            'track' => $request->input('track', 'track'),
            'p_url' => $request->input('p_url', 'p_url'),
            'point' => $request->input('point', 'point'),
            'flag' => $request->input('flag', 'flag')
        ]);

        // if($request -> hasFile('file')){
        //     $fileName = time().'_'.$request -> file('file') -> getClientOriginalName();
        //     $path = $request -> file('file') -> storeAs('public/images', $fileName);
        //     'file_name' => $fileName,

        // }

        return redirect() -> route('main');
    }
}
개발진행중인 부가서비스 스크립트 업무 중 J.ellpe, 비시크, 데일리앤, 스킨어블 업체 계정틀림으로 개발완료하지 못했습니다.