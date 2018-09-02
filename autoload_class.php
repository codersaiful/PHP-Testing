<?php

/**
 * Discuss with Autoload Classes
 * 
 * @version 1.2
 */
spl_autoload(function($className){
    $class_file = __DIR__ . '/classes/' . $className . '.php';
    if(file_exists($class_file)){
        include_once $class_file;
    }
});