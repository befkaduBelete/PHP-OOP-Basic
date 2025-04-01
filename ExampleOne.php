<?php
class Test {
    public function exampleMethod() {
        echo __METHOD__;
    }
}

$obj = new Test();
$obj->exampleMethod(); 
