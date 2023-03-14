<?php


class Cars {

var $wheels = 4;

function greetings(){
    return "hello";

    }



}

$bmw = new Cars();
class Trucks extends Cars {
var $wheels = 10;  //écrase la valeur de Cars

}

$tacoma = new Trucks();

echo $tacoma->wheels;
?>