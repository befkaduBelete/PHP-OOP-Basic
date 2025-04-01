<?php 

class Car {
    private $color ='red';
    private $colorList = ['red','blue','green','white'];
    public $weight;
    private $year;
    public function setYear($year)  {
        $this ->year = $year;
        
    }
    public function getYear(){
        return $this->year;
    }

    public function setColor($color){
        if(in_array($color,$this->colorList)){
            $this->color = $color;

        }

    }
    public function getColor(){
        return $this->color;
    }
}

$myCar = new Car();

$myCar->setYear(2020);
echo $myCar->getYear();

echo $myCar->getColor();
