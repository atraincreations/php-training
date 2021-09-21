<?php

class User{
    //static will always be the same
    public static $minPassLength = 5;

    public static function validatePassword($password){
        if(strlen($password) >= self::$minPassLength){
            return true;
        } else {
            return false;
        }
    } 

}
/*
$password = 'password';

if(User::validatePassword($password)){
    echo 'Password is valid.';
} else {
    echo 'Password is NOT valid.';
}
*/

echo User::$minPassLength;