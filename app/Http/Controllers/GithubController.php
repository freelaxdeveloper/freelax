<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;

class GithubController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }
    public function handleProviderCallback()
    {
        $user = Socialite::driver('github')->user();
        dd($user);
    }
}
