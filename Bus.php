<?php
class Bus{
    private $color ='red';
    private $weight =2000;
    
    public function __construct($color,$weight)
    {
        $this->color = $color;
        $this->weight =2000;
    }
    public function getColor(){
        return $this->color;
    }

    public function __destruct()
    {
        echo "I am destroyed ".$this->color.PHP_EOL;
    }
}
$myBus = new Bus("White",2000);
$myBus2 = new Bus("Green",230);
echo $myBus->getColor().PHP_EOL;
echo $myBus2->getColor().PHP_EOL;
unset($myBus);

