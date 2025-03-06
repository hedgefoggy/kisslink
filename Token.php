<?php

class Token
{
    public static function generate()
    {
        return Session::put(Config::get('session.token_name'), md5(uniqid()));
    }

    public static function check($token) //asdf23raw23r25
    {
        $tokenName = Config::get('session.token_name'); // token

        if (Session::exists($tokenName) && $token == Session::get($tokenName)) {
            Session::delete($tokenName);
            return true;
        }

        return false;
    }
}
