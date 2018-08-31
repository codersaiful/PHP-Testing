<?php

interface School {
    public function mySchool();
    public function mySchoolClass($class_name);
}
interface College{
    public function myCollege();
    public function myCollegeClass($class_name);
}
class Teacher implements School, College{
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    public function mySchool() {
        echo 'Welcome To School. Mr. ' . $this->name . '<br>';
    }
    public function myCollege() {
        echo 'Welcome To my College. Mr. ' . $this->name . '<br>';
    }
    public function mySchoolClass($class_name) {
        echo 'I read in School Class ' . $class_name . '<br>';
    }
    
    public function myCollegeClass($class_name) {
        echo 'I read in College Class ' . $class_name . '<br>';
    }
    
    
    
}

$tchr = new Teacher("Saiful Islam");
$tchr->mySchool();
$tchr->myCollege();
$tchr->mySchoolClass("Ten");
$tchr->myCollegeClass("Intermidiate");