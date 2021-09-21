<?php
    //OOP
    class User{
        //Properties and Methods
        //Properties
        public $id;
        public $username;
        public $email;
        public $passwords;

        //Methods are funstion in a class
        public function __construct(){
            //echo 'Constructor Called';
        }

        public function register(){
            echo 'User Registered';
        }

        public function login($username, $password){
            $this->username = $username;
            $this->password = $password;
            $this->auth_user();
        }

        public function auth_user(){
            echo $this->username. ' is authenticated';
        }

        public function __destruct(){
            //echo 'Destructor Called';
        }
    }

    $User = new User;


    $User->login('alex', '1234');
    //$User->register();

?>