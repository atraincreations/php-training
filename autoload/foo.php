<?php
class Foo{
    //final cannot be overridden by child classes, throws error
    /*final*/ public function sayHello(){
        echo 'Hello World';
    }
}