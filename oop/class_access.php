<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Cars {

    public $wheel_count = 4; 
    private $door_count = 4;
    protected $seat_count = 2; //accessible depuis cette classe et ses enfants


function car_detail(){

    echo $this->wheel_count;
    echo $this->door_count;
    echo $this->seat_count;
    }

}

$bmw = new Cars();

//echo $bmw->wheel_count;
//echo $bmw->door_count; //Cannot access private property Cars::$door_count 
//echo $bmw->seat_count; //Cannot access protected property Cars::$seat_count

$bmw->car_detail();

?>