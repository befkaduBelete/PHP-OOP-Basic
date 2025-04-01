<?php
class Person {
    public $name;
    public $age;
    public $phone;
    public function __construct($name, $age, $phone)
    {
        $this->name = $name;
        $this->age = $age;
        $this->phone = $phone;
    }

    public function hello(){
        return "Hi From Parent Class";
    }
}

class Employee extends Person {
    private $salary;
    public function  __construct($name, $age, $phone,$salary)
    {
        parent::__construct($name,$age,$phone);
        $this->salary = $salary;
        
    }
    public function hello()
    {
        return parent::hello().PHP_EOL."Testing form Employee Class ".PHP_EOL.'NAME :'.$this->name.PHP_EOL.'PHONE : '.$this->age.PHP_EOL.'AGE : '.$this->phone.PHP_EOL.'SALARY : '.$this->salary;
    }
}


$employee  = new Employee('Befkadu',34,'12345678',200000);
echo $employee->hello();