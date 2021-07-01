<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleCallback()
    {
        try {
            $user = socialite::driver('google')->stateless()->user();
            $finduser = User::where('provider_id', $user->id)->first();

            if ($finduser) {
                Auth::login($finduser);
                return redirect()->intended();

            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'provider_id' => $user->id,
                    'avatar' => $user->avatar,
                    'password' => encrypt('physics _ 1503#'),
                ]);

                Auth::login($newUser);
                event(new Registered($newUser));
                return redirect()->intended();
            }

        } catch (Exception $e) {
            return back()->with('error_message', 'Registration error, please try again');
        }
    }
}
