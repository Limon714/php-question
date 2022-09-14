<?php 

class Student{
    public $name;
    
    function hello(){
        echo $this->name;
    }
}

$n = new Student();
$n->name = "Limon Islam";

echo $n->hello();


?>