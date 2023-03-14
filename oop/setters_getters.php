<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Cars {

    private $door_count = 4;

function get_values(){
    echo $this->door_count;
    }

function set_values(){
    $this->door_count = 10;
    }
}

$bmw = new Cars();

$bmw->set_values(); //set the value to 10
$bmw->get_values();


?>