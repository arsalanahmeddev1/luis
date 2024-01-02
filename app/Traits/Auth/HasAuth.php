<?php

namespace App\Traits\Auth;

use Illuminate\Support\Facades\Auth;

trait HasAuth
{

    public function authenticate(array $credentials)
    {

        if (Auth::attempt($credentials)) {

            Auth::login(Auth::getLastAttempted());
            return true;
        }

        return false;
    }
}
