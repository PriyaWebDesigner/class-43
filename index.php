<?php
// 1. Use of this-> keyword
class Car{

    public $name;
    public $engine_cc;

    public function __construct($nameParam, $engineParam){
        $this->name = $nameParam;
        $this->engine_cc = $engineParam;
    }

    public function demoCar(){
        echo 'The Car name is ='.$this->name.'<br>';
        echo 'The Engine name is ='.$this->engine_cc.'<br>';
    }

    // public function demoCar2(){
    //     $this ->demoCar();
    // }
}



$car= new Car('BMW', '4000cc');
$car->demoCar();
// $car->demoCar2();

?>

<?php

class Car2{

    protected $name;
    protected $engine_cc;

    protected function demoCar2(){
        echo 'The Car Name is ='.$this->name.'<br>';
        echo 'The Engine Name is ='.$this->engine_cc.'<br>';
    }

    private function demoCar3(){
        echo 'This is a Private Car';
    }

    public function demoCar4(){
        $this->demoCar2();
    }

    protected function demoCar5(){
        $this->demoCar3();
    }
}

class car3 extends Car2{
    public function show(){
       echo 'Demo <br>';
       $this->demoCar5();
       echo '<br>';
       $this->demoCar2();

       $this->name = 'BMW';
       $this->engine_cc = '4000cc';
    
    }

}

// $car= new Car2();
// $car->name = 'BMW';
// $car->engine_cc = '4000cc';
// $car->demoCar2();

$carObject = new Car3();
// $carObject->name = 'BMW';
// $carObject->engine_cc = '4000cc';
$carObject->show();
$carObject->demoCar4();


?>