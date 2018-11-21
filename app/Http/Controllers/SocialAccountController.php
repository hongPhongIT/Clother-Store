<?php

namespace App\Http\Controllers;

use Socialite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialAccountController extends Controller {

    public function redirectToProvider($provider) {


        return Socialite::driver('$provider')
                        ->scopes(['read:user', 'public_repo'])
                        ->redirect();
    }

    public function handleProviderCallback(\App\SocialAccountsService $accountService, $provider) {

        try {
            $user = \Socialite::with($provider)->user();
        } catch (\Exception $e) {
            return redirect('/login');
        }

        $authUser = $accountService->findOrCreate(
                $user, $provider
        );

        auth()->login($authUser, true);

        return redirect()->to('/home');
    }

}
