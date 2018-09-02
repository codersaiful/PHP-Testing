<?php

/**
 * Description of Chain
 *
 * @author code
 */
class Chain {
    protected $name;
    protected $age;
    protected $data = array();
    public function __construct($name = false, $age = false) {
        $this->name = $name;
        $this->age = $age;
    }
    public function getName() {
        $this->data['name'] = $this->name;
        return $this;
    }

    public function getAge() {
        $this->data['age'] = $this->age;
        return $this;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setAge($age) {
        $this->age = $age;
        return $this;
    }
    
    public function getData() {
        return $this->data;
    }
    
    public function __call($name, $arguments) {
        "Undefine Method: $name and Args: " . implode(', ', $arguments);
    }
}
