<?php
/**
 * We will discuss with magic method property etc
 */
class Masic{
    public $foo;
    public $iligili;
    public $_methods = array();
    public $_arguments = array();
    public $_properties = array();
    public $_properties_val = array();


    public function __construct() {
        echo '<br>This is Magic Class<br>';
    }
    
    public function __get($name) {
        $this->_properties[] = $name;
        //echo "<br>" . $name . " is not Set<br>";
    }
    
    public function __set($name, $value) {
        //echo "Error: We set $name->$value";
        $this->_properties[] = $name;
        $this->_properties_val[] = $name;
        $this->$name = $value;
    }
    
    public function __call($name, $arguments) {
        $this->_methods[] = $name;
        $this->_arguments[$name] = $arguments;
        
    }
}

$mag = new Masic();
$mag->hellp;
$mag->hedllp;
$mag->hedddllp;
$mag->etc = "Something";
$mag->saiful = "Saiful Islam";
$mag->saiful(333,444);
$mag->etc(22,'saiful','islam',array(222,333,444));
var_dump($mag);