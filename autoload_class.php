<?php

/**
 * Discuss with Autoload Classes
 * 
 * @version 1.2
 */
$_CLASS = array();
spl_autoload_register(function($className){
    global $_CLASS;
    $class_file = __DIR__ . '/classes/' . $className . '.php';
    if(file_exists($class_file)){
        include_once $class_file;
        //$_CLASS[$className] = $class_file;
        $_CLASS[] = $className;
        //var_dump($class_file);
    }
});


$st = new Student();

$Teach = new Teacher;
$Teach->setName('Saiful Islam');

$Teach->setAge(33);

var_dump($_CLASS);

