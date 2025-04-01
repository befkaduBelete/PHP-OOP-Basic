<?php
trait FlyableTrait {
  abstract public function fly();
  public function hello(){
    echo "Hello, I can fly ";
  }
}

trait EngineTrait {
    public function hello(){
        echo "I have an engine";
    }
}

class Plain {
    use FlyableTrait, EngineTrait;
    // {
    //     FlyableTrait::hello insteadof EngineTrait;
    //     EngineTrait::hello as engineHello;
    // }
    public function fly(){
     echo " I am flying at 800 km/h speed";
    }
}


$plain = new Plain();
$plain->fly();
$plain->hello();
//$plain->engineHello();