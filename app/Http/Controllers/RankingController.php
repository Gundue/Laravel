<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class RankingController extends Controller
{
    public function index() {
        return view('Ranking');
    }

    public function rank() {
        $orderBy = DB::table('users') -> orderByRaw('point DESC') -> get();

        return view('Ranking', ['orderBy' => $orderBy]);
    }
}
