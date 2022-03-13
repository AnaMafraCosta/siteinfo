<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Providers\RouteServiceProvider;
use Laravel\Socialite\Facades\Socialite;
class LoginSocialController extends Controller
{
    //
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $providerUser = Socialite::driver($provider)->stateless()->user();
        $user = User::firstOrCreate(['email'=> $providerUser->getEmail()],[
            'name' => $providerUser->getName() ?? $providerUser->getNickname(),
            'provider_id' => $providerUser->getId(),
            'provider' => $provider,
        ]);
        Auth::login($user);
        return redirect()->intended(RouteServiceProvider::HOME);
        // $user->token;
    }
}
