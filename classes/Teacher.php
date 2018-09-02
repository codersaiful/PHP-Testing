<?php

/**
 * Description of Teacher
 *
 * @author code
 */
class Teacher {
    private $name;
    private $age;
    public function __construct() {
        
    }
    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }


    
}
