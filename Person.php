<?php
class Person
{
    public $name = "Kebede";
    public $phone = "+251946334154";

    public function __toString()
    {
        echo "Name : $this->name " . PHP_EOL . "Phone : $this->phone" . PHP_EOL;
        return "";
    }

    public function __get($propName)
    {
        if ($propName === 'username') {
            return $this->name;
        }
        return "This variable is invalid \n";
    }

    public function __set($name, $value)
    {
        //if($name ==='firstName')
        return "This variable not exist" . PHP_EOL;
    }
    public function __call($name, $arguments)
    {
        // var_dump($name, $arguments);
        if ($name === 'getMobilePhone')
            return $this->getPhone();
        if ($name === 'setMobilePhone')
        call_user_func_array([$this,'setPhone'],$arguments);
            //return $this->setPhone($arguments[0]);
    }

    public function setPhone($phone)
    {
        return $this->phone = $phone;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function __invoke()
    {
        return "Object was called as a function".PHP_EOL;
        
    }
}

$a = new Person();
echo $a();
$a->firstName = "Befkadu";
echo $a;
echo $a->username . PHP_EOL;
echo $a->getMobilePhone().PHP_EOL;
$a->setMobilePhone('+25177777777777');
echo $a->phone;
//echo $a->firstName;