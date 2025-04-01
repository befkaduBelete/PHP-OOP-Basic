<?php
class Car{
    public $color = 'red';
    public $weight;
    public $year;
    public function hi(){
        return "hi";
    }
}

$car = new Car();
// $car2 = & $car;
// $car2->color="Green";

// $car2 = $car;
// $car = null;

$car2 = & $car;
$car = null;
var_dump($car,$car2);