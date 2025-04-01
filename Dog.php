<?php 

class Dog {
    public $color ='red';
    private $weight =20;
    static $counter = 0;
    public $myCounter = 0;
    public function __construct()
    {
         Dog::$counter ++;
         echo self::$counter . PHP_EOL;
        
    }
}
$myDog = new Dog();
$myDog = new Dog();
//echo Dog::$counter;