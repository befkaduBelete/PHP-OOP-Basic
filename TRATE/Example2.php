<?php
class A
{
    public $var1 = 10;
    public function hello()
    {
        echo "Hello form class A";
    }
}
trait  TraitA
{
    public function hello()
    {
        //echo "Hello form trait A";
       // echo "Hello form trait A  " . $this->var1;
     echo "Hello form trait A ".PHP_EOL . parent::hello().PHP_EOL;
    }
}

class B extends A
{
    use TraitA;
}

$a = new B();
$a->hello();
