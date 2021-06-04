<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class GloginController extends Controller
{
    public function redirectToProvider() {
        return Socialite::driver('google') -> stateless() -> redirect();
    }

    public function handleProviderCallback() {
        // try {
            $user = Socialite::driver('google') -> stateless() -> user();
            $findUser = User::where('google_id', $user->id) ->first();
            if ($findUser) {
                Auth::login($findUser);
                return redirect() -> route('main');
            } else {
                $newUser = User::create([
                    'name' => $user['name'],
                    'email' => $user['email'],
                    'google_id' => $user['sub'],
                ]);
                Auth::login($newUser);
                return redirect() -> route('main');
            }
        // } catch (\Exception $e) {
        //     return redirect('/login');
        // }
    }

    public function logout() {
        Auth::logout();
        return redirect() -> route('main');
    }
}
