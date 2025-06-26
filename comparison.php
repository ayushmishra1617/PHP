<?php

$a=10;
$b=20;
$c="10";

var_dump($a==$b);
echo "</br>";
//var_dump($a==$c);


var_dump($a===$c);//return false because datatype is different
echo "</br>";


var_dump($a!=$c);//Not equal
echo "</br>";


var_dump($a<>$b);//Not equal
echo "</br>";


var_dump($a>$b);
echo "</br>";

var_dump($a<$b);
echo "</br>";


var_dump($a>=$b);
echo "</br>";


var_dump($a<=$b);
echo "</br>";


var_dump($a<=>$b);//spaceship operator
echo "</br>";

?>
