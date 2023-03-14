<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Cars {

    //public $wheel_count = 4; 
    static $wheel_count = 4; 
    static $door_count = 4;
    static $seat_count = 4;

static function car_detail(){ //!! pour une method static il faut utiliser des propriétés static

    // echo $this->wheel_count;
    // echo $this->door_count;
    // echo $this->seat_count;

    echo Cars::$wheel_count;
    echo Cars::$door_count;
    echo Cars::$seat_count;
    }

}

$bmw = new Cars();
// echo $bmw->wheel_count; //no $ pour instance
// echo Cars::$door_count; //$ pour static
echo Cars::car_detail(); //call a static method
?>