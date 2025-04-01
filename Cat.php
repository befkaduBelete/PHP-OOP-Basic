<?php 
class Cat {
    private $color ="red";
    private $weight;
    public $height;
    public function __construct($color, $weight)
    {

        $this->color = $color;
        $this->weight = $weight;
        //echo  "I am created !".PHP_EOL;
        
    }

    public function getColor(){
        return $this->color;
    }

    public function __destruct()
    {
        echo "Object Destroyed !!!".$this->color.PHP_EOL;
    }

    public function __toString()
    {
        return "Object consider as string".PHP_EOL;
    }
    
    public function __get($propName)
    {
        if($propName==='username')
         return $this->color.PHP_EOL;
        else 
         return "$propName not exist".PHP_EOL;
    }

}


$cat = new Cat('White', 200);
echo $cat;
echo $cat->username3;
// $cat2 = new Cat('Green',2500);
// echo $cat->getColor().PHP_EOL;
// echo $cat2->getColor().PHP_EOL;
// unset($cat);
// sleep(2);
// $cat2 = & $cat;
// $cat2= NULL;
//$cat2  =  clone $cat;
//var_dump($cat, $cat2);



// $a = 10;
// $b = & $a; // $b is now a reference to $a

// $b = 20; // Changing $b will also change $a

// echo $a; // Output: 20
// echo $b; // Output: 20