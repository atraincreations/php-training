<?php
//autoload all files from teh current registery
spl_autoload_register(function($class_name){
    include $class_name . '.php';
});

$foo = new Foo;
$bar = new Bar;

$bar->sayHello();
