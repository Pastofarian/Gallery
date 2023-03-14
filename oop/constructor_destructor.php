<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Cars {

    public $wheel_count = 4; 

    static $door_count = 4; 



function __construct(){ //est appelé automatiquement

    echo $this->wheel_count;
    echo self::$door_count++;
}

function __destruct(){
    echo self::$door_count--;

}

}

$bmw = new Cars(); //résultat = 44
$mercedes = new Cars(); //résultat =4445 
$opel = new Cars(); //résultat =444546 




?>