<?php 

class Car{
    private $color;

    function __construct($color = "green"){
        $this->color = $color;
    }
    function getName(){
        return $this->color;
    }
}

$h = new Car("blue");
echo "Hello, ". $h->getName(). "! You are ";
?>