<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\GloginController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RankingController;

Route::get('/', function () {
    return view('index');
}) -> name('main');
Route::get('/Auth', function () {
    return view('Auth');
});
Route::get('/Challenge/rev', function() {
    return view('track.rev');
});
Route::get('/Challenge/misc', function() {
    return view('track.misc');
});
Route::get('/Challenge/web', function() {
    return view('track.web');
});
Route::get('/Ranking', [RankingController::class, 'rank']);
Route::post('/Challenge/upload',[UploadController::class, 'upload']);

Route::post('/login', [LoginController::class, 'login']);
Route::get('/login', [LoginController::class, 'index']);

Route::get('/Challenge/pwn', function() {
    return view('track.pwn');
});
Route::get('/Challenge/pwn', [ChallengeController::class, 'PwnQuestion']);
Route::get('/Challenge/rev', [ChallengeController::class, 'RevQuestion']);
Route::get('/Challenge/misc', [ChallengeController::class, 'MiscQuestion']);
Route::get('/Challenge/web', [ChallengeController::class, 'WebQuestion']);
Route::get('/Challenge/web', [ChallengeController::class, 'index']);

Route::post('/Auth', [AuthController::class, 'update']);

Route::post('/register', [RegisterController::class, 'create']);
Route::get('/register', [RegisterController::class, 'index']);
                                                        
Route::get('/auth/login/google', [GloginController::class, 'redirectToProvider']);
Route::get('/auth/login/google/callback', [GloginController::class, 'handleProviderCallback']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/password/reset', function(){
    return view('auth.passwords.reset');
});
