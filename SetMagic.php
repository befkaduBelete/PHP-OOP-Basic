<?php
class SetMagic {
    private $name ;

    public function __set($PropName, $value)
    {
        var_dump($PropName,$value);
        if($PropName=='username')
        return $value;
        else 
        return "KKK";
       
    }
}

$a  = new SetMagic();

$a->username2 = "Malik";

// echo $a->username2;