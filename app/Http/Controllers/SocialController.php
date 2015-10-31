<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SocialController extends Controller
{
    public function index () {
        return Socialite::driver('google')->redirect();
    }

    public function callback () {
        $user = Socialite::driver('google')->user();

        return $user;
    }
}
