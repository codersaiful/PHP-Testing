<?php

spl_autoload_register(function($className){
    $class_file = __DIR__ . '/chaining/' . $className . '.php';
    if(file_exists($class_file)){
        include_once $class_file;
    }
});
//Working start here
/**
 * Here we will learning, How to method Chaining
 */
$chain = new Chain();
$chain->setAge(33)->setName('Saiful Islam');
$chain->getAge()->getName();
$deta = $chain->getData();
var_dump($deta);