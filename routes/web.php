<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers;


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
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/Auth', function () {
    return view('Auth');
});

Route::get('/Ranking', function () {
    return view('Ranking');
});
Route::post('/login/validate', 'App\Http\Controllers\LoginController@login');

Route::get('/Challenge', 'App\Http\Controllers\ChallengeController@question');

Route::post('/register/validate', 'App\Http\Controllers\RegisterController@register');

                                                        
