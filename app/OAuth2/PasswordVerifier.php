<?php
/**
 * Created by PhpStorm.
 * User: ennio
 * Date: 07/11/15
 * Time: 19:17
 */

namespace CodeDelivery\OAuth2;

use Illuminate\Support\Facades\Auth;

class PasswordVerifier
{
    public function verify($username, $password)
    {
        $credentials = [
            'email'    => $username,
            'password' => $password,
        ];

        if (Auth::once($credentials)) {
            return Auth::user()->id;
        }

        return false;
    }

}