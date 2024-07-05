<?php

class Car{

    public $name;
    public $engine_cc;

    public function __construct($nameParam, $engineParam){
        $this->name = $nameParam;
        $this->engine_cc = $engineParam;
    }

    public function democar(){
        echo 'The Car name is ='.$this->name.'<br>';
        echo 'The Engine name is ='.$this->engine_cc.'<br>';
    }
}

$car= new Car('BMW', '4000cc');
$car->democar();

?>