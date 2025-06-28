<?php

function fruit($name,$color="red"){
    echo "this is $name and its color is $color";
}
fruit("Apple","blue");

echo "<br>";

function num($a,$b=20){
    return $a+$b;
}
echo num(20);

?>
