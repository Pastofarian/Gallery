<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Cars {

    static $wheel_count = 4; 

static function car_detail(){

    return self::$wheel_count;

    }

}

class Trucks extends Cars {
    static function display(){
        echo parent::car_detail();
    }

}

Trucks::display();

?>