<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\GloginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
}) -> name('main');

Route::get('/Auth', function () {
    return view('Auth');
});

Route::get('/Ranking', function () {
    return view('Ranking');
});
Route::post('/login', [LoginController::class, 'login']);
Route::get('/login', [LoginController::class, 'index']);

Route::get('/Challenge', [ChallengeController::class, 'question']);

Route::post('/register', [RegisterController::class, 'register']);
Route::get('/register', [RegisterController::class, 'index']);
                                                        
Route::get('/auth/login/google', [GloginController::class, 'redirectToProvider']);
Route::get('/auth/login/google/callback', [GloginController::class, 'handleProviderCallback']);
