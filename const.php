 <?php 

class Person{
    
    public $name, $age;
    function __construct($n= "AAA", $a = 23)
    {
            $this->name = $n;
            $this->age = $a;
    }
    function __destruct()
    {
            echo $this->name . " is " . $this->age . "<br>";
    }
}
$p = new Person();
$p2 = new Person("Rabbil", 34);
$p3 = new Person("Limon", 27);
// $p->name = "Rabul";
// $p->age = 24;

// $p->show();
// $p2->show();
// $p3->show();
 ?>