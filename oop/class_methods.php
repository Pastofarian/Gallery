<?php


class Cars {

function gretting(){

}

function gretting2(){

}

}

$the_methods = get_class_methods('Cars');

var_dump($the_methods);
echo "<br>";
foreach ($the_methods as $method) {
    echo $method . "<br>";
}


?>