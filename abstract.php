<?php
abstract class School{
    public function details(){
        return "It is inside Abstact Class<br>";
    }
    public abstract function other();
}

class Student extends School{
    public $name = "Saiful islam";
    public $age = "33";
    public function details() {
        echo "Name: " . $this->name . " " . parent::details();
    }
    public function other(){
        echo "This is Other Name. Age is: {$this->age}<br>";
    }
}

$st = new Student();
$st->details();
$st->other();